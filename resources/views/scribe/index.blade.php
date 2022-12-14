<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Moniport Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
                    body .content .php-example code { display: none; }
                    body .content .python-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://staging-ms-auth.monitecture.com";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.0.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.0.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;,&quot;python&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                            <button type="button" class="lang-button" data-language-name="php">php</button>
                                            <button type="button" class="lang-button" data-language-name="python">python</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-users-register">
                                <a href="#endpoints-POSTapi-v1-users-register">Register App User</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-users-verify-email">
                                <a href="#endpoints-POSTapi-v1-users-verify-email">Verify Email for App User</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-users-resend-verification-email">
                                <a href="#endpoints-POSTapi-v1-users-resend-verification-email">Resend app user verification email</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ???</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: November 5 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://staging-ms-auth.monitecture.com</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-v1-users-register">Register App User</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-users-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://staging-ms-auth.monitecture.com/api/v1/users/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"first_name\": \"John\",
    \"last_name\": \"Doe\",
    \"middle_name\": \"\",
    \"phone_number\": \"08101209762\",
    \"device_id\": \"elzpehdqiqipuumrrhbcjbmqquuzapkgsdqoksavksiezblvdvdmpemyhsvkyqvtuvrhwaguuiufqmoqqoydsxdourpregyhhkoijzuenzgxiijhwymuuzsbllmudyjhqnxoebzkbvileflooeiaakzglyqgaasdxmyvdahiisnqltiktyciipenagctjxyllylrxikxurpfijcox\",
    \"email\": \"johndoe342@gmail.com\",
    \"app_reference\": \"gesjpihqschkjbznprmryynevxxdbgewxwlbzpjaggyrnjlceprwpuwilkkvwgqdlhmotdghefojfytrqvmudwbimhqtojcwrlgllqbrqqloxbxicqmcwjacjcmovtxcynbrrxdukfwaxjbvscmntqlmzkfpqjfbwwjtsbjjfnithsgxplexmornfombwvjmsfnanvpdyhhlmqbxanxgmycbbcablenhlnconqkxawdfmqlm\",
    \"password\": \"xvpvacrxnhjgggvrdrelmzkeyvmiwcjgoocpfgjawfeafntodyyuynbalaydrsqbspzmhkzbsuzyoxtjvgplkzrozsjseubamkvfpfeotferjdfuwoapancmxmyobwpmwdrjvuwiyymebvqsbgqvrsblvlccjdpxqpoomzkzebrcueasgjaocqlaprjcyjxzwdjy\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://staging-ms-auth.monitecture.com/api/v1/users/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "John",
    "last_name": "Doe",
    "middle_name": "",
    "phone_number": "08101209762",
    "device_id": "elzpehdqiqipuumrrhbcjbmqquuzapkgsdqoksavksiezblvdvdmpemyhsvkyqvtuvrhwaguuiufqmoqqoydsxdourpregyhhkoijzuenzgxiijhwymuuzsbllmudyjhqnxoebzkbvileflooeiaakzglyqgaasdxmyvdahiisnqltiktyciipenagctjxyllylrxikxurpfijcox",
    "email": "johndoe342@gmail.com",
    "app_reference": "gesjpihqschkjbznprmryynevxxdbgewxwlbzpjaggyrnjlceprwpuwilkkvwgqdlhmotdghefojfytrqvmudwbimhqtojcwrlgllqbrqqloxbxicqmcwjacjcmovtxcynbrrxdukfwaxjbvscmntqlmzkfpqjfbwwjtsbjjfnithsgxplexmornfombwvjmsfnanvpdyhhlmqbxanxgmycbbcablenhlnconqkxawdfmqlm",
    "password": "xvpvacrxnhjgggvrdrelmzkeyvmiwcjgoocpfgjawfeafntodyyuynbalaydrsqbspzmhkzbsuzyoxtjvgplkzrozsjseubamkvfpfeotferjdfuwoapancmxmyobwpmwdrjvuwiyymebvqsbgqvrsblvlccjdpxqpoomzkzebrcueasgjaocqlaprjcyjxzwdjy"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://staging-ms-auth.monitecture.com/api/v1/users/register',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'first_name' =&gt; 'John',
            'last_name' =&gt; 'Doe',
            'middle_name' =&gt; '',
            'phone_number' =&gt; '08101209762',
            'device_id' =&gt; 'elzpehdqiqipuumrrhbcjbmqquuzapkgsdqoksavksiezblvdvdmpemyhsvkyqvtuvrhwaguuiufqmoqqoydsxdourpregyhhkoijzuenzgxiijhwymuuzsbllmudyjhqnxoebzkbvileflooeiaakzglyqgaasdxmyvdahiisnqltiktyciipenagctjxyllylrxikxurpfijcox',
            'email' =&gt; 'johndoe342@gmail.com',
            'app_reference' =&gt; 'gesjpihqschkjbznprmryynevxxdbgewxwlbzpjaggyrnjlceprwpuwilkkvwgqdlhmotdghefojfytrqvmudwbimhqtojcwrlgllqbrqqloxbxicqmcwjacjcmovtxcynbrrxdukfwaxjbvscmntqlmzkfpqjfbwwjtsbjjfnithsgxplexmornfombwvjmsfnanvpdyhhlmqbxanxgmycbbcablenhlnconqkxawdfmqlm',
            'password' =&gt; 'xvpvacrxnhjgggvrdrelmzkeyvmiwcjgoocpfgjawfeafntodyyuynbalaydrsqbspzmhkzbsuzyoxtjvgplkzrozsjseubamkvfpfeotferjdfuwoapancmxmyobwpmwdrjvuwiyymebvqsbgqvrsblvlccjdpxqpoomzkzebrcueasgjaocqlaprjcyjxzwdjy',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://staging-ms-auth.monitecture.com/api/v1/users/register'
payload = {
    "first_name": "John",
    "last_name": "Doe",
    "middle_name": "",
    "phone_number": "08101209762",
    "device_id": "elzpehdqiqipuumrrhbcjbmqquuzapkgsdqoksavksiezblvdvdmpemyhsvkyqvtuvrhwaguuiufqmoqqoydsxdourpregyhhkoijzuenzgxiijhwymuuzsbllmudyjhqnxoebzkbvileflooeiaakzglyqgaasdxmyvdahiisnqltiktyciipenagctjxyllylrxikxurpfijcox",
    "email": "johndoe342@gmail.com",
    "app_reference": "gesjpihqschkjbznprmryynevxxdbgewxwlbzpjaggyrnjlceprwpuwilkkvwgqdlhmotdghefojfytrqvmudwbimhqtojcwrlgllqbrqqloxbxicqmcwjacjcmovtxcynbrrxdukfwaxjbvscmntqlmzkfpqjfbwwjtsbjjfnithsgxplexmornfombwvjmsfnanvpdyhhlmqbxanxgmycbbcablenhlnconqkxawdfmqlm",
    "password": "xvpvacrxnhjgggvrdrelmzkeyvmiwcjgoocpfgjawfeafntodyyuynbalaydrsqbspzmhkzbsuzyoxtjvgplkzrozsjseubamkvfpfeotferjdfuwoapancmxmyobwpmwdrjvuwiyymebvqsbgqvrsblvlccjdpxqpoomzkzebrcueasgjaocqlaprjcyjxzwdjy"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-users-register">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;reference&quot;: &quot;&quot;,
        &quot;first_name&quot;: &quot;&quot;,
        &quot;last_name&quot;: &quot;&quot;,
        &quot;phone_number&quot;: &quot;&quot;,
        &quot;middle_name&quot;: &quot;&quot;,
        &quot;email&quot;: &quot;&quot;,
        &quot;app_reference&quot;: &quot;&quot;,
        &quot;user_reference&quot;: &quot;&quot;,
        &quot;verified&quot;: false,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    &quot;message&quot;: &quot;App user created,verify email.&quot;,
    &quot;code&quot;: &quot;201&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;&quot;,
    &quot;errors&quot;: {}
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;&quot;,
    &quot;code&quot;: 500,
    &quot;error_debug&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-users-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-users-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users-register"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-users-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users-register"></code></pre>
</span>
<form id="form-POSTapi-v1-users-register" data-method="POST"
      data-path="api/v1/users/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-users-register"
                    onclick="tryItOut('POSTapi-v1-users-register');">Try it out ???
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-users-register"
                    onclick="cancelTryOut('POSTapi-v1-users-register');" hidden>Cancel ????
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-users-register" hidden>Send Request ????
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/users/register</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="first_name"
               data-endpoint="POSTapi-v1-users-register"
               value="John"
               data-component="body" hidden>
    <br>
<p>App user first name. Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="last_name"
               data-endpoint="POSTapi-v1-users-register"
               value="Doe"
               data-component="body" hidden>
    <br>
<p>App user last name. Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>middle_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text"
               name="middle_name"
               data-endpoint="POSTapi-v1-users-register"
               value=""
               data-component="body" hidden>
    <br>
<p>App user last name. Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="phone_number"
               data-endpoint="POSTapi-v1-users-register"
               value="08101209762"
               data-component="body" hidden>
    <br>
<p>App user phone. Must be at least 8 characters. Must not be greater than 15 characters.</p>
        </p>
                <p>
            <b><code>device_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="device_id"
               data-endpoint="POSTapi-v1-users-register"
               value="elzpehdqiqipuumrrhbcjbmqquuzapkgsdqoksavksiezblvdvdmpemyhsvkyqvtuvrhwaguuiufqmoqqoydsxdourpregyhhkoijzuenzgxiijhwymuuzsbllmudyjhqnxoebzkbvileflooeiaakzglyqgaasdxmyvdahiisnqltiktyciipenagctjxyllylrxikxurpfijcox"
               data-component="body" hidden>
    <br>
<p>Device id. Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-users-register"
               value="johndoe342@gmail.com"
               data-component="body" hidden>
    <br>
<p>App user email. Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>app_reference</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="app_reference"
               data-endpoint="POSTapi-v1-users-register"
               value="gesjpihqschkjbznprmryynevxxdbgewxwlbzpjaggyrnjlceprwpuwilkkvwgqdlhmotdghefojfytrqvmudwbimhqtojcwrlgllqbrqqloxbxicqmcwjacjcmovtxcynbrrxdukfwaxjbvscmntqlmzkfpqjfbwwjtsbjjfnithsgxplexmornfombwvjmsfnanvpdyhhlmqbxanxgmycbbcablenhlnconqkxawdfmqlm"
               data-component="body" hidden>
    <br>
<p>Reference of app that wants to register the user. Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-v1-users-register"
               value="xvpvacrxnhjgggvrdrelmzkeyvmiwcjgoocpfgjawfeafntodyyuynbalaydrsqbspzmhkzbsuzyoxtjvgplkzrozsjseubamkvfpfeotferjdfuwoapancmxmyobwpmwdrjvuwiyymebvqsbgqvrsblvlccjdpxqpoomzkzebrcueasgjaocqlaprjcyjxzwdjy"
               data-component="body" hidden>
    <br>
<p>User password. Must not be greater than 255 characters.</p>
        </p>
        </form>

                    <h2 id="endpoints-POSTapi-v1-users-verify-email">Verify Email for App User</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-users-verify-email">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://staging-ms-auth.monitecture.com/api/v1/users/verify-email" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"verification_token\": \"hzirutpawoxpwbdszosjyrzksrczffpavbukhasoslfhfoyvvjqqxaafgkgkirpvncnswavdpmsdeeoqpgixrrcmsblayucmmpuhuoddenlmyfpxqthktddanfjutmsffmqaoswkygrrivtxzwmupvmkkkzuvirhowcjxnxvfxantynbslmajsyzuigudbzuoqtjtonvtaogz\",
    \"user_reference\": \"qckvowoplhrfvvmbimybwskxgoelwfv\",
    \"app_reference\": \"gvyclcyyeispowanaeocrujyfqxuqqwmjpzmkcaxeqjoqugfstrhbkkzikdicofgqsmnskieuiqzeazcuhlvehfslrbkwlxeeyugduixexbiwsxsdxtabcfdcjsji\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://staging-ms-auth.monitecture.com/api/v1/users/verify-email"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "verification_token": "hzirutpawoxpwbdszosjyrzksrczffpavbukhasoslfhfoyvvjqqxaafgkgkirpvncnswavdpmsdeeoqpgixrrcmsblayucmmpuhuoddenlmyfpxqthktddanfjutmsffmqaoswkygrrivtxzwmupvmkkkzuvirhowcjxnxvfxantynbslmajsyzuigudbzuoqtjtonvtaogz",
    "user_reference": "qckvowoplhrfvvmbimybwskxgoelwfv",
    "app_reference": "gvyclcyyeispowanaeocrujyfqxuqqwmjpzmkcaxeqjoqugfstrhbkkzikdicofgqsmnskieuiqzeazcuhlvehfslrbkwlxeeyugduixexbiwsxsdxtabcfdcjsji"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://staging-ms-auth.monitecture.com/api/v1/users/verify-email',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'verification_token' =&gt; 'hzirutpawoxpwbdszosjyrzksrczffpavbukhasoslfhfoyvvjqqxaafgkgkirpvncnswavdpmsdeeoqpgixrrcmsblayucmmpuhuoddenlmyfpxqthktddanfjutmsffmqaoswkygrrivtxzwmupvmkkkzuvirhowcjxnxvfxantynbslmajsyzuigudbzuoqtjtonvtaogz',
            'user_reference' =&gt; 'qckvowoplhrfvvmbimybwskxgoelwfv',
            'app_reference' =&gt; 'gvyclcyyeispowanaeocrujyfqxuqqwmjpzmkcaxeqjoqugfstrhbkkzikdicofgqsmnskieuiqzeazcuhlvehfslrbkwlxeeyugduixexbiwsxsdxtabcfdcjsji',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://staging-ms-auth.monitecture.com/api/v1/users/verify-email'
payload = {
    "verification_token": "hzirutpawoxpwbdszosjyrzksrczffpavbukhasoslfhfoyvvjqqxaafgkgkirpvncnswavdpmsdeeoqpgixrrcmsblayucmmpuhuoddenlmyfpxqthktddanfjutmsffmqaoswkygrrivtxzwmupvmkkkzuvirhowcjxnxvfxantynbslmajsyzuigudbzuoqtjtonvtaogz",
    "user_reference": "qckvowoplhrfvvmbimybwskxgoelwfv",
    "app_reference": "gvyclcyyeispowanaeocrujyfqxuqqwmjpzmkcaxeqjoqugfstrhbkkzikdicofgqsmnskieuiqzeazcuhlvehfslrbkwlxeeyugduixexbiwsxsdxtabcfdcjsji"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-users-verify-email">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
 &quot;message&quot;: &#039;App user verified successfull&#039;,
 &quot;data&quot;: null,
 &quot;code&quot;: 200
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json">{
&quot;message&quot;: &quot;Expired verification token&quot;,
`&quot;code&quot;: 403,
&quot;error_debug&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;&quot;,
    &quot;errors&quot;: {}
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;&quot;,
    &quot;code&quot;: 500,
    &quot;error_debug&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-users-verify-email" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-users-verify-email"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users-verify-email"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-users-verify-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users-verify-email"></code></pre>
</span>
<form id="form-POSTapi-v1-users-verify-email" data-method="POST"
      data-path="api/v1/users/verify-email"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users-verify-email', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-users-verify-email"
                    onclick="tryItOut('POSTapi-v1-users-verify-email');">Try it out ???
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-users-verify-email"
                    onclick="cancelTryOut('POSTapi-v1-users-verify-email');" hidden>Cancel ????
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-users-verify-email" hidden>Send Request ????
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/users/verify-email</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>verification_token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="verification_token"
               data-endpoint="POSTapi-v1-users-verify-email"
               value="hzirutpawoxpwbdszosjyrzksrczffpavbukhasoslfhfoyvvjqqxaafgkgkirpvncnswavdpmsdeeoqpgixrrcmsblayucmmpuhuoddenlmyfpxqthktddanfjutmsffmqaoswkygrrivtxzwmupvmkkkzuvirhowcjxnxvfxantynbslmajsyzuigudbzuoqtjtonvtaogz"
               data-component="body" hidden>
    <br>
<p>Email verification token. Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>user_reference</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="user_reference"
               data-endpoint="POSTapi-v1-users-verify-email"
               value="qckvowoplhrfvvmbimybwskxgoelwfv"
               data-component="body" hidden>
    <br>
<p>Reference of user that wants to  verify their email. Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>app_reference</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="app_reference"
               data-endpoint="POSTapi-v1-users-verify-email"
               value="gvyclcyyeispowanaeocrujyfqxuqqwmjpzmkcaxeqjoqugfstrhbkkzikdicofgqsmnskieuiqzeazcuhlvehfslrbkwlxeeyugduixexbiwsxsdxtabcfdcjsji"
               data-component="body" hidden>
    <br>
<p>Reference of app that wants to  verify user. Must not be greater than 255 characters.</p>
        </p>
        </form>

                    <h2 id="endpoints-POSTapi-v1-users-resend-verification-email">Resend app user verification email</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-users-resend-verification-email">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://staging-ms-auth.monitecture.com/api/v1/users/resend-verification-email" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_reference\": \"tpkzyfjtdtczvqthsvpzhzskfpzngxbbsbbjrwvlzcippfrbgqgwtqlufqimxyjbdmhlyzcdbk\",
    \"app_reference\": \"iautwoyxxzvusnesqguudohgaslmkffkhschqoxmyctsuksbwxnwmdixnoazaxabbthzmstkmawvlsanrotfmptpijnifekmppuxozemuvvevoiuucmevawkwbqmkueplgif\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://staging-ms-auth.monitecture.com/api/v1/users/resend-verification-email"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_reference": "tpkzyfjtdtczvqthsvpzhzskfpzngxbbsbbjrwvlzcippfrbgqgwtqlufqimxyjbdmhlyzcdbk",
    "app_reference": "iautwoyxxzvusnesqguudohgaslmkffkhschqoxmyctsuksbwxnwmdixnoazaxabbthzmstkmawvlsanrotfmptpijnifekmppuxozemuvvevoiuucmevawkwbqmkueplgif"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://staging-ms-auth.monitecture.com/api/v1/users/resend-verification-email',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_reference' =&gt; 'tpkzyfjtdtczvqthsvpzhzskfpzngxbbsbbjrwvlzcippfrbgqgwtqlufqimxyjbdmhlyzcdbk',
            'app_reference' =&gt; 'iautwoyxxzvusnesqguudohgaslmkffkhschqoxmyctsuksbwxnwmdixnoazaxabbthzmstkmawvlsanrotfmptpijnifekmppuxozemuvvevoiuucmevawkwbqmkueplgif',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://staging-ms-auth.monitecture.com/api/v1/users/resend-verification-email'
payload = {
    "user_reference": "tpkzyfjtdtczvqthsvpzhzskfpzngxbbsbbjrwvlzcippfrbgqgwtqlufqimxyjbdmhlyzcdbk",
    "app_reference": "iautwoyxxzvusnesqguudohgaslmkffkhschqoxmyctsuksbwxnwmdixnoazaxabbthzmstkmawvlsanrotfmptpijnifekmppuxozemuvvevoiuucmevawkwbqmkueplgif"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-users-resend-verification-email">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
 &quot;message&quot;: &#039;Verification mail has been resent.&#039;,
 &quot;data&quot;: null,
 &quot;code&quot;: 200
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json">{
&quot;message&quot;: &quot;App user already verified&quot;,
`&quot;code&quot;: 403,
&quot;error_debug&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;&quot;,
    &quot;errors&quot;: {}
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;&quot;,
    &quot;code&quot;: 500,
    &quot;error_debug&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-users-resend-verification-email" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-users-resend-verification-email"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users-resend-verification-email"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-users-resend-verification-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users-resend-verification-email"></code></pre>
</span>
<form id="form-POSTapi-v1-users-resend-verification-email" data-method="POST"
      data-path="api/v1/users/resend-verification-email"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users-resend-verification-email', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-users-resend-verification-email"
                    onclick="tryItOut('POSTapi-v1-users-resend-verification-email');">Try it out ???
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-users-resend-verification-email"
                    onclick="cancelTryOut('POSTapi-v1-users-resend-verification-email');" hidden>Cancel ????
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-users-resend-verification-email" hidden>Send Request ????
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/users/resend-verification-email</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>user_reference</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="user_reference"
               data-endpoint="POSTapi-v1-users-resend-verification-email"
               value="tpkzyfjtdtczvqthsvpzhzskfpzngxbbsbbjrwvlzcippfrbgqgwtqlufqimxyjbdmhlyzcdbk"
               data-component="body" hidden>
    <br>
<p>Reference of user that wants to  verify their email. Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>app_reference</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="app_reference"
               data-endpoint="POSTapi-v1-users-resend-verification-email"
               value="iautwoyxxzvusnesqguudohgaslmkffkhschqoxmyctsuksbwxnwmdixnoazaxabbthzmstkmawvlsanrotfmptpijnifekmppuxozemuvvevoiuucmevawkwbqmkueplgif"
               data-component="body" hidden>
    <br>
<p>Reference of app that wants to  verify user. Must not be greater than 255 characters.</p>
        </p>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                                        <button type="button" class="lang-button" data-language-name="php">php</button>
                                                        <button type="button" class="lang-button" data-language-name="python">python</button>
                            </div>
            </div>
</div>
</body>
</html>
