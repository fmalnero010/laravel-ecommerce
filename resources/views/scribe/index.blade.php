<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Ecommerce API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.3.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.3.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
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
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-categories">
                                <a href="#endpoints-GETapi-v1-categories">GET api/v1/categories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-products">
                                <a href="#endpoints-GETapi-v1-products">GET api/v1/products</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-products--product_sku-">
                                <a href="#endpoints-GETapi-v1-products--product_sku-">GET api/v1/products/{product_sku}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: November 17, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-v1-categories">GET api/v1/categories</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-categories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Lou Sauer&quot;,
            &quot;slug&quot;: &quot;lou-sauer&quot;,
            &quot;children&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;Hermina VonRueden&quot;,
                    &quot;slug&quot;: &quot;hermina-vonrueden&quot;,
                    &quot;children&quot;: []
                },
                {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;Beth Gislason&quot;,
                    &quot;slug&quot;: &quot;beth-gislason&quot;,
                    &quot;children&quot;: []
                }
            ]
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Ms. Amie Block&quot;,
            &quot;slug&quot;: &quot;ms-amie-block&quot;,
            &quot;children&quot;: []
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Ivah Wuckert&quot;,
            &quot;slug&quot;: &quot;ivah-wuckert&quot;,
            &quot;children&quot;: []
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Dayana Frami&quot;,
            &quot;slug&quot;: &quot;dayana-frami&quot;,
            &quot;children&quot;: []
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Myra Paucek&quot;,
            &quot;slug&quot;: &quot;myra-paucek&quot;,
            &quot;children&quot;: []
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Hermina VonRueden&quot;,
            &quot;slug&quot;: &quot;hermina-vonrueden&quot;,
            &quot;children&quot;: []
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Beth Gislason&quot;,
            &quot;slug&quot;: &quot;beth-gislason&quot;,
            &quot;children&quot;: []
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-categories" data-method="GET"
      data-path="api/v1/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-categories"
                    onclick="tryItOut('GETapi-v1-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-categories"
                    onclick="cancelTryOut('GETapi-v1-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-categories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-products">GET api/v1/products</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;aspernatur odit rem&quot;,
            &quot;description&quot;: &quot;Nihil quidem repellendus placeat. Nemo nihil nostrum molestias. Ab voluptatem optio fugiat perferendis necessitatibus. Ut nobis velit hic. Voluptatem consequuntur neque corporis.&quot;,
            &quot;price&quot;: &quot;697.116,85&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-3647-dcez&quot;,
            &quot;stock&quot;: 14,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;ea occaecati necessitatibus&quot;,
            &quot;description&quot;: &quot;Ut expedita nihil nesciunt sint accusantium sint. Quia odio consequatur error rem voluptas libero quas. Sed expedita odio aperiam illum. Quae itaque autem facere libero. Quia perspiciatis veritatis sit et qui illum voluptate fuga.&quot;,
            &quot;price&quot;: &quot;967.099,81&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-7761-tjnu&quot;,
            &quot;stock&quot;: 82,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;voluptatem quas et&quot;,
            &quot;description&quot;: &quot;Fugit assumenda molestiae neque id. Nam cumque id aut quia rerum quae velit. Nemo tenetur fuga quis voluptates repudiandae.&quot;,
            &quot;price&quot;: &quot;233.097,59&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-6999-jbiw&quot;,
            &quot;stock&quot;: 37,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;aliquid quae sit&quot;,
            &quot;description&quot;: &quot;Dolore sit veritatis est ut nisi est quos dicta. Occaecati totam et consequatur porro placeat iusto et incidunt. Fuga explicabo quia suscipit exercitationem. Omnis laborum est soluta qui nihil et dolorum qui.&quot;,
            &quot;price&quot;: &quot;346.911,31&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-7693-iasr&quot;,
            &quot;stock&quot;: 92,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;neque voluptate et&quot;,
            &quot;description&quot;: &quot;Sed quia perferendis excepturi animi doloremque. Necessitatibus magni voluptas earum. Nostrum rerum iste voluptatem suscipit.&quot;,
            &quot;price&quot;: &quot;228.018,92&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-6219-uujt&quot;,
            &quot;stock&quot;: 72,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;placeat ipsam omnis&quot;,
            &quot;description&quot;: &quot;Et omnis quaerat iste eos veritatis iste. Sit quidem sed consequatur magnam velit.&quot;,
            &quot;price&quot;: &quot;405.387,38&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-6591-jkdw&quot;,
            &quot;stock&quot;: 56,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;consequatur nihil hic&quot;,
            &quot;description&quot;: &quot;Culpa aut error sed distinctio et. Minima sit aliquam quis esse. Quis molestiae dolores est quibusdam ea praesentium et rem. Asperiores et tempore qui velit quis pariatur.&quot;,
            &quot;price&quot;: &quot;131.440,06&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-2530-smxn&quot;,
            &quot;stock&quot;: 37,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;sed nobis quia&quot;,
            &quot;description&quot;: &quot;Error officiis alias porro ea qui modi. Est quo natus quia ratione.&quot;,
            &quot;price&quot;: &quot;780.397,28&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-3080-gman&quot;,
            &quot;stock&quot;: 1,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;incidunt et nesciunt&quot;,
            &quot;description&quot;: &quot;Cupiditate omnis aliquam placeat eius. Quia commodi cum soluta quaerat repudiandae eligendi quam. Sunt dolor pariatur odit voluptatem quia.&quot;,
            &quot;price&quot;: &quot;190.016,84&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-0721-wosg&quot;,
            &quot;stock&quot;: 23,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;assumenda necessitatibus iusto&quot;,
            &quot;description&quot;: &quot;Voluptatum qui aut vitae et. Iusto in explicabo dolores et et excepturi animi ipsam. Ipsum architecto debitis occaecati omnis quis possimus occaecati. Accusantium alias eum voluptatibus esse ullam modi nisi.&quot;,
            &quot;price&quot;: &quot;651.408,67&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-8481-ucqa&quot;,
            &quot;stock&quot;: 40,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;veniam rerum ut&quot;,
            &quot;description&quot;: &quot;Quia voluptatibus similique id vel ipsum. Repudiandae ut aliquid alias reiciendis neque. Similique quas placeat pariatur placeat. Debitis consequatur veritatis esse aut voluptas.&quot;,
            &quot;price&quot;: &quot;935.946,70&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-8051-ygae&quot;,
            &quot;stock&quot;: 81,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;quo veniam laudantium&quot;,
            &quot;description&quot;: &quot;Quis earum debitis sed consectetur laboriosam. Voluptates eveniet consequatur adipisci sequi repellat. Voluptatem porro illo molestiae voluptas dolorum dolor qui ut.&quot;,
            &quot;price&quot;: &quot;551.074,81&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-2103-zyoj&quot;,
            &quot;stock&quot;: 50,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;facere deleniti sequi&quot;,
            &quot;description&quot;: &quot;Totam et et aspernatur laborum molestiae et quia. Vero et nesciunt consequatur blanditiis laudantium ea. Eos voluptatem magnam ad ut.&quot;,
            &quot;price&quot;: &quot;289.067,00&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-9094-scwp&quot;,
            &quot;stock&quot;: 21,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;ad eos nobis&quot;,
            &quot;description&quot;: &quot;Et sunt facilis at et. Nobis et consectetur et vel. Excepturi consequatur dolorem et minus ipsa. Vel beatae debitis dolorem dolorum consequuntur.&quot;,
            &quot;price&quot;: &quot;185.297,10&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-1308-pmam&quot;,
            &quot;stock&quot;: 13,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 15,
            &quot;name&quot;: &quot;in enim ut&quot;,
            &quot;description&quot;: &quot;Saepe voluptas quo nostrum adipisci. Atque ab dolor at qui. Aut autem architecto voluptatibus quo. Sed accusantium tenetur earum error voluptas.&quot;,
            &quot;price&quot;: &quot;274.779,07&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-3900-jgwo&quot;,
            &quot;stock&quot;: 24,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 16,
            &quot;name&quot;: &quot;amet quis veritatis&quot;,
            &quot;description&quot;: &quot;Et omnis beatae voluptas repudiandae exercitationem molestias. Nam voluptate numquam magni omnis quae possimus. Voluptas exercitationem voluptas quisquam adipisci. Eveniet ipsum ut aut dolorum ut.&quot;,
            &quot;price&quot;: &quot;314.193,79&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-6778-ytkp&quot;,
            &quot;stock&quot;: 17,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 17,
            &quot;name&quot;: &quot;quam numquam mollitia&quot;,
            &quot;description&quot;: &quot;Et aut quia assumenda alias repellendus. Libero aliquam labore ipsam rem. Porro ratione fuga error ducimus occaecati.&quot;,
            &quot;price&quot;: &quot;268.850,50&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-3395-tikn&quot;,
            &quot;stock&quot;: 3,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 18,
            &quot;name&quot;: &quot;debitis in blanditiis&quot;,
            &quot;description&quot;: &quot;Eos praesentium ea qui non dolorum. A deserunt et vero doloribus occaecati provident. Fugiat nobis aspernatur sint ut.&quot;,
            &quot;price&quot;: &quot;592.709,19&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-8049-asge&quot;,
            &quot;stock&quot;: 24,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 19,
            &quot;name&quot;: &quot;dolorem quisquam tempore&quot;,
            &quot;description&quot;: &quot;Eligendi velit a qui laudantium. Sed neque omnis maxime. Nulla alias in ea at. Et laboriosam et velit architecto molestiae fugit cupiditate nam.&quot;,
            &quot;price&quot;: &quot;519.619,82&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-2669-gxpg&quot;,
            &quot;stock&quot;: 58,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 20,
            &quot;name&quot;: &quot;officiis inventore facilis&quot;,
            &quot;description&quot;: &quot;Voluptatem ratione debitis unde tenetur repellat veritatis qui. Sunt eum exercitationem culpa nobis ut nesciunt. Iusto eum fuga tempore voluptas. In eum facere repudiandae distinctio voluptate delectus.&quot;,
            &quot;price&quot;: &quot;395.309,31&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-6439-qrtu&quot;,
            &quot;stock&quot;: 86,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 21,
            &quot;name&quot;: &quot;nam numquam a&quot;,
            &quot;description&quot;: &quot;Adipisci temporibus voluptatem dolorum fugit maiores accusantium. Eum ut commodi molestias repellendus dolorum facilis. Harum et temporibus veniam reiciendis sit voluptates quis. Qui veniam harum quia quas eos odio.&quot;,
            &quot;price&quot;: &quot;284.229,62&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-4789-nojx&quot;,
            &quot;stock&quot;: 0,
            &quot;category&quot;: {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Dayana Frami&quot;,
                &quot;slug&quot;: &quot;dayana-frami&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 22,
            &quot;name&quot;: &quot;minima modi delectus&quot;,
            &quot;description&quot;: &quot;Repellendus vero nulla in dolores. Consequatur nihil accusamus voluptatum vel. Ut dolorum est voluptatem magni rerum aut eum.&quot;,
            &quot;price&quot;: &quot;604.590,43&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-4605-ksim&quot;,
            &quot;stock&quot;: 0,
            &quot;category&quot;: {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Dayana Frami&quot;,
                &quot;slug&quot;: &quot;dayana-frami&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 23,
            &quot;name&quot;: &quot;voluptas quia quas&quot;,
            &quot;description&quot;: &quot;Et et et quisquam perferendis laborum. Deleniti alias laborum autem maiores. Est ab consequatur minus pariatur quis debitis.&quot;,
            &quot;price&quot;: &quot;436.386,59&quot;,
            &quot;currency&quot;: &quot;USD&quot;,
            &quot;sku&quot;: &quot;SKU-6654-qydj&quot;,
            &quot;stock&quot;: 0,
            &quot;category&quot;: {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Dayana Frami&quot;,
                &quot;slug&quot;: &quot;dayana-frami&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 24,
            &quot;name&quot;: &quot;quis quia corporis&quot;,
            &quot;description&quot;: &quot;Et cupiditate reiciendis perspiciatis occaecati. Et id asperiores voluptatem saepe. Nulla sed quis amet.&quot;,
            &quot;price&quot;: &quot;491.825,40&quot;,
            &quot;currency&quot;: &quot;ARS&quot;,
            &quot;sku&quot;: &quot;SKU-8007-dcsm&quot;,
            &quot;stock&quot;: 65,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 25,
            &quot;name&quot;: &quot;qui eos aut&quot;,
            &quot;description&quot;: &quot;Officiis iste consequatur amet in non. Sunt quos nemo enim quia quam non. Omnis et vel quibusdam ut perferendis fuga.&quot;,
            &quot;price&quot;: &quot;847.788,13&quot;,
            &quot;currency&quot;: &quot;ARS&quot;,
            &quot;sku&quot;: &quot;SKU-5814-pzwi&quot;,
            &quot;stock&quot;: 57,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        },
        {
            &quot;id&quot;: 26,
            &quot;name&quot;: &quot;perferendis rerum et&quot;,
            &quot;description&quot;: &quot;Quidem est corrupti est quo voluptates deleniti recusandae. Et qui tenetur dolore iusto quia nemo id vitae. Et inventore est eos quam vel quidem a autem. Eum voluptas sint aperiam. Qui sit amet ea facilis ea ipsa.&quot;,
            &quot;price&quot;: &quot;429.946,90&quot;,
            &quot;currency&quot;: &quot;ARS&quot;,
            &quot;sku&quot;: &quot;SKU-5280-ffyo&quot;,
            &quot;stock&quot;: 31,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Ivah Wuckert&quot;,
                &quot;slug&quot;: &quot;ivah-wuckert&quot;,
                &quot;children&quot;: []
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-products"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-products">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-products" data-method="GET"
      data-path="api/v1/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-products"
                    onclick="tryItOut('GETapi-v1-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-products"
                    onclick="cancelTryOut('GETapi-v1-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-products"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-products--product_sku-">GET api/v1/products/{product_sku}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-products--product_sku-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/products/SKU-3647-dcez" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/products/SKU-3647-dcez"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-products--product_sku-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;aspernatur odit rem&quot;,
        &quot;description&quot;: &quot;Nihil quidem repellendus placeat. Nemo nihil nostrum molestias. Ab voluptatem optio fugiat perferendis necessitatibus. Ut nobis velit hic. Voluptatem consequuntur neque corporis.&quot;,
        &quot;price&quot;: &quot;697.116,85&quot;,
        &quot;currency&quot;: &quot;USD&quot;,
        &quot;sku&quot;: &quot;SKU-3647-dcez&quot;,
        &quot;stock&quot;: 14,
        &quot;category&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Ivah Wuckert&quot;,
            &quot;slug&quot;: &quot;ivah-wuckert&quot;,
            &quot;children&quot;: []
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-products--product_sku-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-products--product_sku-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-products--product_sku-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-products--product_sku-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-products--product_sku-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-products--product_sku-" data-method="GET"
      data-path="api/v1/products/{product_sku}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-products--product_sku-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-products--product_sku-"
                    onclick="tryItOut('GETapi-v1-products--product_sku-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-products--product_sku-"
                    onclick="cancelTryOut('GETapi-v1-products--product_sku-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-products--product_sku-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/products/{product_sku}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-products--product_sku-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-products--product_sku-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_sku</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_sku"                data-endpoint="GETapi-v1-products--product_sku-"
               value="SKU-3647-dcez"
               data-component="url">
    <br>
<p>Example: <code>SKU-3647-dcez</code></p>
            </div>
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
