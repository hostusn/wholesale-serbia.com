var get = function (url, method) {

	// Create the XHR request
	var request = new XMLHttpRequest();

	// Return it as a Promise
	return new Promise(function (resolve, reject) {

		// Setup our listener to process compeleted requests
		request.onreadystatechange = function () {

			// Only run if the request is complete
			if (request.readyState !== 4) return;

			// Process the response
			if (request.status >= 200 && request.status < 300) {
				// If successful
				resolve(request);
			} else {
				// If failed
				reject({
					status: request.status,
					statusText: request.statusText
				});
			}

		};

		// Setup our HTTP request
		request.open(method || 'GET', url, true);

		// Send the request
		request.send();

	});
};

function getCategories(categoryName, mainDiv) {
    return new Promise((resolve, reject) => {
       const categories = get("https://wholesale-serbia.com.vps.mycpanel.rs/wp-json/wp/v2/categories?_embed");
       if (categories) {
           resolve(categories);
       } else {
           reject(Error("Cound't find categories"));
       }
    });
}

function getPages(category) {
    return new Promise((resolve, reject) => {
        const pages = get("https://wholesale-serbia.com.vps.mycpanel.rs/wp-json/wp/v2/pages?_embed&categories=".concat(category));
        if (pages) {
            resolve(pages);
        } else {
            reject(Error("Couldn't find pages"));
        }
    });
}

function findCategory(data, categoryName) {
    return new Promise((resolve, reject) => {
        data = JSON.parse(data.response);
        data.forEach((item) => {
            if (item.name.toLowerCase() == categoryName.toLowerCase()) {
                resolve(item);
            }
        });
        reject(Error("Couldn't find category with term: ".concat(categoryName)));
    });
} 

function printAllPages(data) {
    data = JSON.parse(data.response);
    var pageArray = [];
    data.forEach((item) => {
        var page = {};
        page.slug = item.slug;
        page.link = item.link;
        page.categories = [];
        item._embedded["wp:term"][0].forEach((category) => {
            page.categories.push(category);
        });
        page.tags = [];
        item._embedded["wp:term"][1].forEach((tag) => {
           page.tags.push(tag); 
        });
        page.img_src = item._embedded["wp:featuredmedia"][0].source_url;
        pageArray.push(page);
    });
    return pageArray;
}

function renderFilters(mainDiv, pages) {
    return new Promise((resolve, reject) => {
       if (mainDiv) {
           resolve(createFilters(mainDiv, pages));
       } else {
           reject(Error("Couldn't render filters section"));
       }
    });
}

function renterTiles(mainDiv, pages) {
    return new Promise((resolve, reject) => {
       if (mainDiv && pages) {
           resolve(createTiles(mainDiv, pages));
       } else {
           reject(Error("Couldn't render tiles section"));
       }
    });
}

function createTiles(mainDiv, pages) {
    if (mainDiv && pages) {
        // create tilesSection element
        const tilesSection = document.createElement("div");
        tilesSection.classList.add("tilesSection");
        
        pages.forEach((page) => {
           const tile = document.createElement("div");
           tile.classList.add("tile");
           // tileName
           const tileName = document.createElement("div");
           tileName.classList.add("tileName");
           tileName.appendChild(document.createTextNode(page.slug));
           // tileImg
           const img = document.createElement("img");
           img.classList.add("tileImg");
           img.setAttribute("src", page.img_src);
           // tileTags
           const tileTags = document.createElement("div");
           tileTags.classList.add("tileTags");
           var tileTagsValue = [];
           page.tags.forEach((tag) => {
              tileTagsValue = tileTagsValue.concat(tag.name);
           });
           tileTags.appendChild(document.createTextNode(tileTagsValue));
           tile.appendChild(tileTags);
           // tileLink
           const tileLink = document.createElement("a");
           tileLink.classList.add("tileLink");
           tileLink.setAttribute("href", page.link);
           //tileLink.setAttribute("target", "_blank");
           
           tile.appendChild(tileLink);
           tile.appendChild(tileName);
           tile.appendChild(img);
           
           tilesSection.appendChild(tile);
        });
        
        mainDiv.appendChild(tilesSection);
    } else {
        return Error("Couldn't find main div and pages array");
    }
}

function createFilters(mainDiv, pages) {
    if (mainDiv) {
        // craate filter element
        const filterSection = document.createElement("div");
        filterSection.classList.add("filters");
        var alreadyAddedTags = [];
        // create tag buttons
        pages.forEach((page) => {
           page.tags.forEach((tag) => {
               if (alreadyAddedTags.includes(tag.name)) {
                   return;
               } else {
                   const tagDiv = document.createElement("button");
                   tagDiv.classList.add("tagButton");
                   tagDiv.appendChild(document.createTextNode(tag.name));
                   filterSection.appendChild(tagDiv);
                   alreadyAddedTags.push(tag.name);
               }
           });
        });
        
        // create search input field
        const search = document.createElement("input");
        search.classList.add("searchCategories");
        filterSection.appendChild(search);
        
        // add FilterSection element to mainDiv paren element
        mainDiv.appendChild(filterSection);
        return [mainDiv, pages];
    } else {
        return Error("Couldn't find mainDiv section");
    }
}

function removeLoader(loader, mainDiv) {
    return new Promise((resolve, reject) => {
        if (loader) {
            resolve(loader.style.display = "none");
        } else {
            reject(Error("Couldn't close loader"));
        }
    });
}

jQuery(document).ready(function() {
    const title = document.title.split("-")[0].trim();
    const mainDiv = document.querySelector(".middle_content");
    // CREATING A LOADER
    const loader = document.createElement("img");
    loader.classList.add("categoryLoader");
    loader.setAttribute("src", "https://wholesale-serbia.com.vps.mycpanel.rs/wp-content/uploads/2019/10/loader1.gif");
    mainDiv.appendChild(loader);
    getCategories(title, mainDiv)
        .then(response => {
            return findCategory(response, title);
        })
        .then(response2 => {
            return getPages(response2.id);
        })
        .then(response3 => {
           return printAllPages(response3);
        })
        .then(pages => {
          return renderFilters(mainDiv, pages);  
        })
        .then(mainDiv => {
            renterTiles(mainDiv[0], mainDiv[1]);
            return removeLoader(loader, mainDiv);
        })
        .then(loaderResponse => {
            console.log("Loader closed!");
        })
        .catch(error => {
          console.log(error); 
           removeLoader(loader, mainDiv);
        });
});


jQuery(document).on("click", ".tagButton", function() {
   const tag = this.textContent;
   const tiles = document.querySelectorAll(".tile");
   tiles.forEach((tile) => {
      var tileTags = tile.firstChild.textContent;
      if (tileTags.toLowerCase().includes(tag.toLowerCase())) {
          tile.style.display = "block";
      } else {
          tile.style.display = "none";
      }
   });
});

jQuery(document).on("keyup", ".searchCategories", function() {
   const term = this.value;
   const tiles = document.querySelectorAll(".tile");
   tiles.forEach((tile) => {
       var tileName = tile.childNodes[2].textContent;
       if (tileName.toLowerCase().includes(term.toLowerCase())) {
          tile.style.display = "block";
       } else {
           tile.style.display = "none";
       }
   });
});