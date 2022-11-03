<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

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
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.0.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.0.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

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
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: November 2 2022</li>
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
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-v1-users-verify-email">Verify Email for App User</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-users-verify-email">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/users/verify-email" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"verification_token\": \"doofvyocgrpaqtbjtkmaxjsrxubzflenzzfobkwucrawrkcfeojltfwtnqyiphzeshwdvslxcrezlvtbfpatbhdkmhunwyaylecgptghbxefxoosppgywkvphmonxakiutlkyhclovcw\",
    \"user_reference\": \"pxhuzdt\",
    \"app_reference\": \"tforkvcibrbsfddpronjpwcgatvjmetqbdhwlpxexjkhhrgkephukjwewnrfwcjzcncwqwtxhamndckeryfyxccxavytlqcmtpibamiloskywnlwlcdityiebgejmnbojrqxzaojwtlyjlhkqyfllakdbfzrnhxqshumhwslshdgusuxelrlgznuocdfrd\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/users/verify-email"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "verification_token": "doofvyocgrpaqtbjtkmaxjsrxubzflenzzfobkwucrawrkcfeojltfwtnqyiphzeshwdvslxcrezlvtbfpatbhdkmhunwyaylecgptghbxefxoosppgywkvphmonxakiutlkyhclovcw",
    "user_reference": "pxhuzdt",
    "app_reference": "tforkvcibrbsfddpronjpwcgatvjmetqbdhwlpxexjkhhrgkephukjwewnrfwcjzcncwqwtxhamndckeryfyxccxavytlqcmtpibamiloskywnlwlcdityiebgejmnbojrqxzaojwtlyjlhkqyfllakdbfzrnhxqshumhwslshdgusuxelrlgznuocdfrd"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

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
                    onclick="tryItOut('POSTapi-v1-users-verify-email');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-users-verify-email"
                    onclick="cancelTryOut('POSTapi-v1-users-verify-email');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-users-verify-email" hidden>Send Request 💥
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
               value="doofvyocgrpaqtbjtkmaxjsrxubzflenzzfobkwucrawrkcfeojltfwtnqyiphzeshwdvslxcrezlvtbfpatbhdkmhunwyaylecgptghbxefxoosppgywkvphmonxakiutlkyhclovcw"
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
               value="pxhuzdt"
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
               value="tforkvcibrbsfddpronjpwcgatvjmetqbdhwlpxexjkhhrgkephukjwewnrfwcjzcncwqwtxhamndckeryfyxccxavytlqcmtpibamiloskywnlwlcdityiebgejmnbojrqxzaojwtlyjlhkqyfllakdbfzrnhxqshumhwslshdgusuxelrlgznuocdfrd"
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
    "http://localhost/api/v1/users/resend-verification-email" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_reference\": \"tiphdaoiknmviudatzvkcbpavwyxqqqdjwsyppjunysrpbnaicrunxopvckwjmhcdjgygdgcoapeocibwsvwnnvzutdwbyucadtbcqdvcebkugrlaifpteicvojgwboxpzbyjkmzbttgntufecqxkljlbvutjoyjbckxksfigipdsmqidmnyckkstplbfxtttjfsmntovizohjaqxmih\",
    \"app_reference\": \"wircxzturilceku\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/users/resend-verification-email"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_reference": "tiphdaoiknmviudatzvkcbpavwyxqqqdjwsyppjunysrpbnaicrunxopvckwjmhcdjgygdgcoapeocibwsvwnnvzutdwbyucadtbcqdvcebkugrlaifpteicvojgwboxpzbyjkmzbttgntufecqxkljlbvutjoyjbckxksfigipdsmqidmnyckkstplbfxtttjfsmntovizohjaqxmih",
    "app_reference": "wircxzturilceku"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

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
                    onclick="tryItOut('POSTapi-v1-users-resend-verification-email');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-users-resend-verification-email"
                    onclick="cancelTryOut('POSTapi-v1-users-resend-verification-email');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-users-resend-verification-email" hidden>Send Request 💥
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
               value="tiphdaoiknmviudatzvkcbpavwyxqqqdjwsyppjunysrpbnaicrunxopvckwjmhcdjgygdgcoapeocibwsvwnnvzutdwbyucadtbcqdvcebkugrlaifpteicvojgwboxpzbyjkmzbttgntufecqxkljlbvutjoyjbckxksfigipdsmqidmnyckkstplbfxtttjfsmntovizohjaqxmih"
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
               value="wircxzturilceku"
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
                            </div>
            </div>
</div>
</body>
</html>
