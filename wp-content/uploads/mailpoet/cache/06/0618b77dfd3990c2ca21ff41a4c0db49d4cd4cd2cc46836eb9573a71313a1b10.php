<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* layout.html */
class __TwigTemplate_7903792a367879e91ecfd3e29b32ab5e570d796d22df375a296c045a6e9bd427 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'templates' => [$this, 'block_templates'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'after_css' => [$this, 'block_after_css'],
            'translations' => [$this, 'block_translations'],
            'after_translations' => [$this, 'block_after_translations'],
            'after_javascript' => [$this, 'block_after_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($context["sub_menu"] ?? null)) {
            // line 2
            echo "<script type=\"text/javascript\">
jQuery('.toplevel_page_mailpoet-newsletters.menu-top-last')
  .addClass('wp-has-current-submenu')
  .find('a[href\$=\"";
            // line 5
            echo \MailPoetVendor\twig_escape_filter($this->env, ($context["sub_menu"] ?? null), "html", null, true);
            echo "\"]')
  .addClass('current')
  .parent()
  .addClass('current');
</script>
";
        }
        // line 11
        echo "
<!-- pre connect to 3d party to speed up page loading -->
<link rel=\"preconnect\" href=\"https://beacon-v2.helpscout.net/\">
<link rel=\"dns-prefetch\" href=\"https://beacon-v2.helpscout.net/\">
<link rel=\"preconnect\" href=\"http://cdn.mxpnl.com\">
<link rel=\"dns-prefetch\" href=\"http://cdn.mxpnl.com\">

<!-- system notices -->
<div id=\"mailpoet_notice_system\" class=\"mailpoet_notice\" style=\"display:none;\"></div>

<!-- handlebars templates -->
";
        // line 22
        $this->displayBlock('templates', $context, $blocks);
        // line 23
        echo "
<!-- main container -->
<div class=\"wrap\">
  <!-- notices -->
  <div id=\"mailpoet_notice_error\" class=\"mailpoet_notice\" style=\"display:none;\"></div>
  <div id=\"mailpoet_notice_success\" class=\"mailpoet_notice\" style=\"display:none;\"></div>
  <!-- React notices -->
  <div id=\"mailpoet_notices\"></div>

  <!-- title block -->
  ";
        // line 33
        $this->displayBlock('title', $context, $blocks);
        // line 34
        echo "  <!-- content block -->
  ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "</div>

<!-- stylesheets -->
";
        // line 39
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("admin.css");
        // line 41
        echo "

";
        // line 43
        echo do_action("mailpoet_styles_admin_after");
        echo "

<!-- rtl specific stylesheet -->
";
        // line 46
        if ($this->env->getExtension('MailPoet\Twig\Functions')->isRtl()) {
            // line 47
            echo "  ";
            echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("rtl.css");
            echo "
";
        }
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('after_css', $context, $blocks);
        // line 51
        echo "
<script type=\"text/javascript\">
  var mailpoet_date_format = \"";
        // line 53
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\Functions')->getWPDateTimeFormat(), "js"), "html", null, true);
        echo "\";
  var mailpoet_time_format = \"";
        // line 54
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\Functions')->getWPTimeFormat(), "js"), "html", null, true);
        echo "\";
  var mailpoet_version = \"";
        // line 55
        echo $this->env->getExtension('MailPoet\Twig\Functions')->getMailPoetVersion();
        echo "\";
  var mailpoet_locale = \"";
        // line 56
        echo $this->env->getExtension('MailPoet\Twig\Functions')->getTwoLettersLocale();
        echo "\";
  var mailpoet_polls_data = ";
        // line 57
        echo json_encode($this->env->getExtension('MailPoet\Twig\Polls')->getPollsData());
        echo ";
  var mailpoet_polls_visibility = ";
        // line 58
        echo json_encode($this->env->getExtension('MailPoet\Twig\Polls')->getPollsVisibility());
        echo ";
  var mailpoet_premium_version = ";
        // line 59
        echo json_encode($this->env->getExtension('MailPoet\Twig\Functions')->getMailPoetPremiumVersion());
        echo ";
  var mailpoet_analytics_enabled = ";
        // line 60
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_jsonencode_filter(call_user_func_array($this->env->getFunction('is_analytics_enabled')->getCallable(), [])), "html", null, true);
        echo ";
  var mailpoet_analytics_data = ";
        // line 61
        echo json_encode(call_user_func_array($this->env->getFunction('get_analytics_data')->getCallable(), []));
        echo ";
  var mailpoet_analytics_public_id = ";
        // line 62
        echo json_encode(call_user_func_array($this->env->getFunction('get_analytics_public_id')->getCallable(), []));
        echo ";
  var mailpoet_analytics_new_public_id = ";
        // line 63
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_jsonencode_filter(call_user_func_array($this->env->getFunction('is_analytics_public_id_new')->getCallable(), [])), "html", null, true);
        echo ";
  var mailpoet_free_domains = ";
        // line 64
        echo json_encode($this->env->getExtension('MailPoet\Twig\Functions')->getFreeDomains());
        echo ";
  var mailpoet_woocommerce_active = ";
        // line 65
        echo json_encode($this->env->getExtension('MailPoet\Twig\Functions')->isWoocommerceActive());
        echo ";
  // RFC 5322 standard; http://emailregex.com/ combined with https://google.github.io/closure-library/api/goog.format.EmailAddress.html#isValid
  var mailpoet_email_regex = /(?=^[+a-zA-Z0-9_.!#\$%&'*\\/=?^`{|}~-]+@([a-zA-Z0-9-]+\\.)+[a-zA-Z0-9]{2,63}\$)(?=^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,})))/;
  var mailpoet_feature_flags = ";
        // line 68
        echo json_encode(($context["feature_flags"] ?? null));
        echo ";
  var mailpoet_referral_id = ";
        // line 69
        echo json_encode(($context["referral_id"] ?? null));
        echo ";
</script>

<!-- javascripts -->
";
        // line 73
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("vendor.js", "mailpoet.js");
        // line 76
        echo "

";
        // line 78
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(["ajaxFailedErrorMessage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("An error has happened while performing a request, the server has responded with response code %d"), "senderEmailAddressWarning1" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("You might not reach the inbox of your subscribers if you use this email address.", "In the last step, before sending a newsletter. URL: ?page=mailpoet-newsletters#/send/2"), "senderEmailAddressWarning2" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Use an address like %1\$s for the Sender and put %2\$s in the <em>Reply-to</em> field below.", "In the last step, before sending a newsletter. URL: ?page=mailpoet-newsletters#/send/2"), "senderEmailAddressWarning3" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more."), "mailerSendingResumedNotice" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending has been resumed."), "spfCheckTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Oops! You might not receive your own emails.", "DNS SPF Record check"), "spfCheckMsgWhy" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Why? You have an SPF entry for %s, but it's incomplete.", "DNS SPF Record check"), "spfCheckMsgEdit" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("If you send with MailPoet, edit the SPF record in your DNS and add %s to it, so it looks like this:", "DNS SPF Record check"), "spfCheckMsgAllow" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("This will allow MailPoet to send emails from %s addresses.", "DNS SPF Record check"), "spfCheckReadMore" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more about SPF", "DNS SPF Record check")]);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('translations', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('after_translations', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("admin_vendor_chunk.js", "admin_vendor.js");
        // line 99
        echo "

";
        // line 101
        echo do_action("mailpoet_scripts_admin_before");
        echo "

";
        // line 103
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("admin.js");
        // line 105
        echo "

";
        // line 107
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("lib/analytics.js");
        echo "

";
        // line 109
        $context["has_valid_premium_key"] = $this->env->getExtension('MailPoet\Twig\Functions')->hasValidPremiumKey();
        // line 110
        echo "
";
        // line 111
        $context["helpscout_form_id"] = "1c666cab-c0f6-4614-bc06-e5d0ad78db2b";
        // line 112
        if (($context["has_valid_premium_key"] ?? null)) {
            // line 113
            echo "  ";
            $context["helpscout_form_id"] = "e93d0423-1fa6-4bbc-9df9-c174f823c35f";
        }
        // line 115
        echo "
<script type=\"text/javascript\">!function(e,t,n){function a(){var e=t.getElementsByTagName(\"script\")[0],n=t.createElement(\"script\");n.type=\"text/javascript\",n.async=!0,n.src=\"https://beacon-v2.helpscout.net\",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],\"complete\"===t.readyState)return a();e.attachEvent?e.attachEvent(\"onload\",a):e.addEventListener(\"load\",a,!1)}(window,document,window.Beacon||function(){});</script>

<script type=\"text/javascript\"></script>

<script type=\"text/javascript\">
  if(window['Beacon'] !== undefined && window.hide_mailpoet_beacon !== true) {
    window.Beacon('init', '";
        // line 122
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["helpscout_form_id"] ?? null), "html", null, true);
        echo "');

    // HelpScout Beacon: Configuration
    window.Beacon(\"config\", {
      icon: 'message',
      zIndex: 50000,
      instructions: \"";
        // line 128
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Want to give feedback to the MailPoet team? Contact us here. Please provide as much information as possible!");
        echo "\",
      showContactFields: true
    });

    // HelpScout Beacon: Custom information
    window.Beacon(\"identify\",
      ";
        // line 134
        echo json_encode(\MailPoet\Helpscout\Beacon::getData());
        echo "
    );

    if (window.mailpoet_beacon_articles) {
      window.Beacon('suggest', window.mailpoet_beacon_articles)
    }
  }
</script>
<script>
  Parsley.addMessages('mailpoet', {
    defaultMessage: '";
        // line 144
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value seems to be invalid.");
        echo "',
    type: {
      email: '";
        // line 146
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be a valid email.");
        echo "',
      url: '";
        // line 147
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be a valid url.");
        echo "',
      number: '";
        // line 148
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be a valid number.");
        echo "',
      integer: '";
        // line 149
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be a valid integer.");
        echo "',
      digits: '";
        // line 150
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be digits.");
        echo "',
      alphanum: '";
        // line 151
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be alphanumeric.");
        echo "'
    },
    notblank: '";
        // line 153
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should not be blank.");
        echo "',
    required: '";
        // line 154
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value is required.");
        echo "',
    pattern: '";
        // line 155
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value seems to be invalid.");
        echo "',
    min: '";
        // line 156
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be greater than or equal to %s.");
        echo "',
    max: '";
        // line 157
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be lower than or equal to %s.");
        echo "',
    range: '";
        // line 158
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be between %s and %s.");
        echo "',
    minlength: '";
        // line 159
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value is too short. It should have %s characters or more.");
        echo "',
    maxlength: '";
        // line 160
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value is too long. It should have %s characters or fewer.");
        echo "',
    length: '";
        // line 161
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value length is invalid. It should be between %s and %s characters long.");
        echo "',
    mincheck: '";
        // line 162
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You must select at least %s choices.");
        echo "',
    maxcheck: '";
        // line 163
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You must select %s choices or fewer.");
        echo "',
    check: '";
        // line 164
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You must select between %s and %s choices.");
        echo "',
    equalto: '";
        // line 165
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This value should be the same.");
        echo "'
  });

  Parsley.setLocale('mailpoet');
</script>
";
        // line 170
        $this->displayBlock('after_javascript', $context, $blocks);
    }

    // line 22
    public function block_templates($context, array $blocks = [])
    {
    }

    // line 33
    public function block_title($context, array $blocks = [])
    {
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
    }

    // line 50
    public function block_after_css($context, array $blocks = [])
    {
    }

    // line 92
    public function block_translations($context, array $blocks = [])
    {
    }

    // line 94
    public function block_after_translations($context, array $blocks = [])
    {
    }

    // line 170
    public function block_after_javascript($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 170,  397 => 94,  392 => 92,  387 => 50,  382 => 35,  377 => 33,  372 => 22,  368 => 170,  360 => 165,  356 => 164,  352 => 163,  348 => 162,  344 => 161,  340 => 160,  336 => 159,  332 => 158,  328 => 157,  324 => 156,  320 => 155,  316 => 154,  312 => 153,  307 => 151,  303 => 150,  299 => 149,  295 => 148,  291 => 147,  287 => 146,  282 => 144,  269 => 134,  260 => 128,  251 => 122,  242 => 115,  238 => 113,  236 => 112,  234 => 111,  231 => 110,  229 => 109,  224 => 107,  220 => 105,  218 => 103,  213 => 101,  209 => 99,  207 => 96,  204 => 95,  202 => 94,  199 => 93,  197 => 92,  194 => 91,  192 => 78,  188 => 76,  186 => 73,  179 => 69,  175 => 68,  169 => 65,  165 => 64,  161 => 63,  157 => 62,  153 => 61,  149 => 60,  145 => 59,  141 => 58,  137 => 57,  133 => 56,  129 => 55,  125 => 54,  121 => 53,  117 => 51,  115 => 50,  112 => 49,  106 => 47,  104 => 46,  98 => 43,  94 => 41,  92 => 39,  87 => 36,  85 => 35,  82 => 34,  80 => 33,  68 => 23,  66 => 22,  53 => 11,  44 => 5,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html", "/home/vps/public_html/wholesale-serbia.com/wp-content/plugins/mailpoet/views/layout.html");
    }
}
