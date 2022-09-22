<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Authentication Log Microservice</title>

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
        var baseUrl = "http://localhost:84";
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
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-users-register">
                                <a href="#endpoints-POSTapi-v1-users-register">Register App User</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-users-update-login-history">
                                <a href="#endpoints-POSTapi-v1-users-update-login-history">Update login history</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-users-user-check">
                                <a href="#endpoints-POSTapi-v1-users-user-check">Check if User exists</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-apps-login">
                                <a href="#endpoints-POSTapi-v1-apps-login">Login App</a>
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
        <li>Last updated: September 22 2022</li>
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
<pre><code class="language-yaml">http://localhost:84</code></pre>

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
    "http://localhost:84/api/v1/users/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"first_name\": \"John\",
    \"last_name\": \"Doe\",
    \"middle_name\": \"\",
    \"phone_number\": \"08101209762\",
    \"device_id\": \"mgkuybrbvykdlxeoataltiotlpqbhtkldasthsvnqxfycshevukvyjtfnvxgqohzeoimqtexwtremplyjlqzxntlqodpllnqgrreidsvxoxfiuolinejvdshyxltileydrotzhvgevrjfdhgkqwzviclplsjaskdluybrhbhsymcwhxeqykvrjfwczubacepoybolxnmwuzkvwkgczlwbjaqlgzshig\",
    \"email\": \"johndoe342@gmail.com\",
    \"app_reference\": \"yucpbkhjdjltfigfycvgtyltrikasivwfxujotwdjghoriunjuotjiupkfaerhsjltbqzhvwronuetbuvaywphkbspdimqceftnkqmthiugy\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:84/api/v1/users/register"
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
    "device_id": "mgkuybrbvykdlxeoataltiotlpqbhtkldasthsvnqxfycshevukvyjtfnvxgqohzeoimqtexwtremplyjlqzxntlqodpllnqgrreidsvxoxfiuolinejvdshyxltileydrotzhvgevrjfdhgkqwzviclplsjaskdluybrhbhsymcwhxeqykvrjfwczubacepoybolxnmwuzkvwkgczlwbjaqlgzshig",
    "email": "johndoe342@gmail.com",
    "app_reference": "yucpbkhjdjltfigfycvgtyltrikasivwfxujotwdjghoriunjuotjiupkfaerhsjltbqzhvwronuetbuvaywphkbspdimqceftnkqmthiugy"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-users-register">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;reference&quot;: &quot;390322fa-50f2-497f-925a-1d8aaadb74a3&quot;,
        &quot;first_name&quot;: &quot;Genoveva Bartell&quot;,
        &quot;last_name&quot;: &quot;Julien Oberbrunner&quot;,
        &quot;phone_number&quot;: &quot;1-541-715-0251&quot;,
        &quot;middle_name&quot;: &quot;Morton Koch&quot;,
        &quot;email&quot;: &quot;blanda.raoul@gmail.com&quot;,
        &quot;app_reference&quot;: &quot;926b8083-7565-4d97-acf3-fd90b345f89c&quot;,
        &quot;user_reference&quot;: &quot;14fe49bb-6b1b-402d-8484-b9475ae94547&quot;,
        &quot;verified&quot;: false,
        &quot;created_at&quot;: &quot;2022-09-22T17:57:36.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-09-22T17:57:36.000000Z&quot;
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
                    onclick="tryItOut('POSTapi-v1-users-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-users-register"
                    onclick="cancelTryOut('POSTapi-v1-users-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-users-register" hidden>Send Request 💥
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
               value="mgkuybrbvykdlxeoataltiotlpqbhtkldasthsvnqxfycshevukvyjtfnvxgqohzeoimqtexwtremplyjlqzxntlqodpllnqgrreidsvxoxfiuolinejvdshyxltileydrotzhvgevrjfdhgkqwzviclplsjaskdluybrhbhsymcwhxeqykvrjfwczubacepoybolxnmwuzkvwkgczlwbjaqlgzshig"
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
               value="yucpbkhjdjltfigfycvgtyltrikasivwfxujotwdjghoriunjuotjiupkfaerhsjltbqzhvwronuetbuvaywphkbspdimqceftnkqmthiugy"
               data-component="body" hidden>
    <br>
<p>Reference of app that wants to register the user. Must not be greater than 255 characters.</p>
        </p>
        </form>

                    <h2 id="endpoints-POSTapi-v1-users-update-login-history">Update login history</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-users-update-login-history">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:84/api/v1/users/update-login-history" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"device_id\": \"ttqnctjyphcmkvnpabrmsuhboyymvafiqyfhpvvjtcylwhrzcqpsbrazclxgnoxqicjuxqmbqzxelqtrvuifxcyyuhhflkdyecgjzwinbxnsjnvjawikplibqdfzomayhxlsiscsfofpuhwdoevyieppnwlbjbzynrxpmbrlikerkgtt\",
    \"ip_address\": \"pngyxrnqcpkkcbpevhdkbxcmzumvzijyffsctmqgmqyyfpkxnhozhefliqcsllclmgvxfzkszdalglgalheiuxfxdvogppgqhhzrtvztdiphyfizdgqlkpsc\",
    \"is_successful\": false,
    \"user_reference\": \"ummoyxvjvwuwhhyynrnnchmhfzgmnnnrlytjajrkjdagfgptztucchsxvhlohxbogykflxlqckbwahdtgrtwjxcglfofzawocxgsxqqwhwziypznpdlgodpdakcmpexmgrfrtqhtgtbsblpyhjpclgtjhjaqrhgtgeemzjqxvakpbcsigmijtzckobsvvyogzocfxapenhciuifiqmakkffhuzxodtcaqvzgkkaspwmpkvdqbpgtyatppyg\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:84/api/v1/users/update-login-history"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "device_id": "ttqnctjyphcmkvnpabrmsuhboyymvafiqyfhpvvjtcylwhrzcqpsbrazclxgnoxqicjuxqmbqzxelqtrvuifxcyyuhhflkdyecgjzwinbxnsjnvjawikplibqdfzomayhxlsiscsfofpuhwdoevyieppnwlbjbzynrxpmbrlikerkgtt",
    "ip_address": "pngyxrnqcpkkcbpevhdkbxcmzumvzijyffsctmqgmqyyfpkxnhozhefliqcsllclmgvxfzkszdalglgalheiuxfxdvogppgqhhzrtvztdiphyfizdgqlkpsc",
    "is_successful": false,
    "user_reference": "ummoyxvjvwuwhhyynrnnchmhfzgmnnnrlytjajrkjdagfgptztucchsxvhlohxbogykflxlqckbwahdtgrtwjxcglfofzawocxgsxqqwhwziypznpdlgodpdakcmpexmgrfrtqhtgtbsblpyhjpclgtjhjaqrhgtgeemzjqxvakpbcsigmijtzckobsvvyogzocfxapenhciuifiqmakkffhuzxodtcaqvzgkkaspwmpkvdqbpgtyatppyg"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-users-update-login-history">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;app_user_device_reference&quot;: &quot;cadc49ac-dfbb-412e-a13d-436bf1852172&quot;,
        &quot;ip_address&quot;: &quot;5cebf18b-0c9f-4ac0-ab29-3ea08de944c6&quot;,
        &quot;is_successful&quot;: true,
        &quot;created_at&quot;: &quot;2022-09-22T17:57:36.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-09-22T17:57:36.000000Z&quot;
    },
    &quot;message&quot;: &quot;Login history updated&quot;,
    &quot;code&quot;: &quot;200&quot;
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
<span id="execution-results-POSTapi-v1-users-update-login-history" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-users-update-login-history"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users-update-login-history"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-users-update-login-history" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users-update-login-history"></code></pre>
</span>
<form id="form-POSTapi-v1-users-update-login-history" data-method="POST"
      data-path="api/v1/users/update-login-history"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users-update-login-history', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-users-update-login-history"
                    onclick="tryItOut('POSTapi-v1-users-update-login-history');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-users-update-login-history"
                    onclick="cancelTryOut('POSTapi-v1-users-update-login-history');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-users-update-login-history" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/users/update-login-history</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>device_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="device_id"
               data-endpoint="POSTapi-v1-users-update-login-history"
               value="ttqnctjyphcmkvnpabrmsuhboyymvafiqyfhpvvjtcylwhrzcqpsbrazclxgnoxqicjuxqmbqzxelqtrvuifxcyyuhhflkdyecgjzwinbxnsjnvjawikplibqdfzomayhxlsiscsfofpuhwdoevyieppnwlbjbzynrxpmbrlikerkgtt"
               data-component="body" hidden>
    <br>
<p>Device id. Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>ip_address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="ip_address"
               data-endpoint="POSTapi-v1-users-update-login-history"
               value="pngyxrnqcpkkcbpevhdkbxcmzumvzijyffsctmqgmqyyfpkxnhozhefliqcsllclmgvxfzkszdalglgalheiuxfxdvogppgqhhzrtvztdiphyfizdgqlkpsc"
               data-component="body" hidden>
    <br>
<p>User ip address. Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>is_successful</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-v1-users-update-login-history" hidden>
            <input type="radio" name="is_successful"
                   value="true"
                   data-endpoint="POSTapi-v1-users-update-login-history"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-v1-users-update-login-history" hidden>
            <input type="radio" name="is_successful"
                   value="false"
                   data-endpoint="POSTapi-v1-users-update-login-history"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>
<p>Login attempt status.</p>
        </p>
                <p>
            <b><code>user_reference</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="user_reference"
               data-endpoint="POSTapi-v1-users-update-login-history"
               value="ummoyxvjvwuwhhyynrnnchmhfzgmnnnrlytjajrkjdagfgptztucchsxvhlohxbogykflxlqckbwahdtgrtwjxcglfofzawocxgsxqqwhwziypznpdlgodpdakcmpexmgrfrtqhtgtbsblpyhjpclgtjhjaqrhgtgeemzjqxvakpbcsigmijtzckobsvvyogzocfxapenhciuifiqmakkffhuzxodtcaqvzgkkaspwmpkvdqbpgtyatppyg"
               data-component="body" hidden>
    <br>
<p>User reference. Must not be greater than 255 characters.</p>
        </p>
        </form>

                    <h2 id="endpoints-POSTapi-v1-users-user-check">Check if User exists</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-users-user-check">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:84/api/v1/users/user-check" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"johndoe342@gmail.com\",
    \"app_reference\": \"ctcyhghmlpyzxkbrdhidcmerdpzqnjkpwsbbdjivmawjwcwzwaytatklrrtvmyrsvwzhfqeebnyxjkttdprlnatdniikzpsbyrqnnerspsygwghfnwvrkaolxlvmejhlatdtkhcwonybolmyncehologjylmqafajztbrkdjvkznaiby\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:84/api/v1/users/user-check"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "johndoe342@gmail.com",
    "app_reference": "ctcyhghmlpyzxkbrdhidcmerdpzqnjkpwsbbdjivmawjwcwzwaytatklrrtvmyrsvwzhfqeebnyxjkttdprlnatdniikzpsbyrqnnerspsygwghfnwvrkaolxlvmejhlatdtkhcwonybolmyncehologjylmqafajztbrkdjvkznaiby"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-users-user-check">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Request successful&quot;,
    &quot;data&quot;: {
        &quot;app_user_exists&quot;: true,
        &quot;app_user&quot;: {
            &quot;reference&quot;: &quot;a6eed45b-d9e4-4ab8-9543-58d2b7dd69fc&quot;,
            &quot;first_name&quot;: &quot;Houston Willms&quot;,
            &quot;last_name&quot;: &quot;Immanuel Jaskolski&quot;,
            &quot;phone_number&quot;: &quot;564.559.8929&quot;,
            &quot;middle_name&quot;: &quot;Kavon Shields&quot;,
            &quot;email&quot;: &quot;ernie62@yahoo.com&quot;,
            &quot;app_reference&quot;: &quot;f0b5c7b6-1bdd-4cf2-b658-0d95eb495786&quot;,
            &quot;user_reference&quot;: &quot;b43eaf15-7b8c-47db-81cf-94db49fafbeb&quot;,
            &quot;verified&quot;: false,
            &quot;created_at&quot;: &quot;2022-09-22T00:26:42.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-09-22T00:26:42.000000Z&quot;
        }
    },
    &quot;code&quot;: 200
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
<span id="execution-results-POSTapi-v1-users-user-check" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-users-user-check"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users-user-check"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-users-user-check" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users-user-check"></code></pre>
</span>
<form id="form-POSTapi-v1-users-user-check" data-method="POST"
      data-path="api/v1/users/user-check"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users-user-check', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-users-user-check"
                    onclick="tryItOut('POSTapi-v1-users-user-check');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-users-user-check"
                    onclick="cancelTryOut('POSTapi-v1-users-user-check');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-users-user-check" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/users/user-check</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-users-user-check"
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
               data-endpoint="POSTapi-v1-users-user-check"
               value="ctcyhghmlpyzxkbrdhidcmerdpzqnjkpwsbbdjivmawjwcwzwaytatklrrtvmyrsvwzhfqeebnyxjkttdprlnatdniikzpsbyrqnnerspsygwghfnwvrkaolxlvmejhlatdtkhcwonybolmyncehologjylmqafajztbrkdjvkznaiby"
               data-component="body" hidden>
    <br>
<p>Reference of app that wants to register the user. Must not be greater than 255 characters.</p>
        </p>
        </form>

                    <h2 id="endpoints-POSTapi-v1-apps-login">Login App</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-apps-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:84/api/v1/apps/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"password\": \"aut\",
    \"reference\": \"hfurhrtmyqxecwcezqfusegqjehoyewgucacnuiwarqyfifznnjqhcfkcxxzztazcuqrpec\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:84/api/v1/apps/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "aut",
    "reference": "hfurhrtmyqxecwcezqfusegqjehoyewgucacnuiwarqyfifznnjqhcfkcxxzztazcuqrpec"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-apps-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
 &quot;message&quot;: &#039;Login successfull&#039;,
 &quot;data&quot;: {
 &quot;token&quot;:&quot;########&quot;
 },
 &quot;code&quot;: 200
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json">{
&quot;message&quot;: &quot;invalid login credentials&quot;,
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
<span id="execution-results-POSTapi-v1-apps-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-apps-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-apps-login"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-apps-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-apps-login"></code></pre>
</span>
<form id="form-POSTapi-v1-apps-login" data-method="POST"
      data-path="api/v1/apps/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-apps-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-apps-login"
                    onclick="tryItOut('POSTapi-v1-apps-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-apps-login"
                    onclick="cancelTryOut('POSTapi-v1-apps-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-apps-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/apps/login</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-v1-apps-login"
               value="aut"
               data-component="body" hidden>
    <br>
<p>App password.</p>
        </p>
                <p>
            <b><code>reference</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="reference"
               data-endpoint="POSTapi-v1-apps-login"
               value="hfurhrtmyqxecwcezqfusegqjehoyewgucacnuiwarqyfifznnjqhcfkcxxzztazcuqrpec"
               data-component="body" hidden>
    <br>
<p>App reference. Must not be greater than 255 characters.</p>
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
