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
        <li>Last updated: November 23, 2025</li>
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
            &quot;name&quot;: &quot;Shyanne Wiegand&quot;,
            &quot;slug&quot;: &quot;shyanne-wiegand&quot;,
            &quot;children&quot;: []
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Marilie Boehm&quot;,
            &quot;slug&quot;: &quot;marilie-boehm&quot;,
            &quot;children&quot;: []
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Lina Lindgren&quot;,
            &quot;slug&quot;: &quot;lina-lindgren&quot;,
            &quot;children&quot;: []
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Enid Raynor&quot;,
            &quot;slug&quot;: &quot;enid-raynor&quot;,
            &quot;children&quot;: []
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Malika Osinski&quot;,
            &quot;slug&quot;: &quot;malika-osinski&quot;,
            &quot;children&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;Fannie D&#039;Amore&quot;,
                    &quot;slug&quot;: &quot;fannie-damore&quot;
                },
                {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;Gia Flatley&quot;,
                    &quot;slug&quot;: &quot;gia-flatley&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Fannie D&#039;Amore&quot;,
            &quot;slug&quot;: &quot;fannie-damore&quot;,
            &quot;children&quot;: []
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Gia Flatley&quot;,
            &quot;slug&quot;: &quot;gia-flatley&quot;,
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
            &quot;name&quot;: &quot;dolores ut consequatur&quot;,
            &quot;description&quot;: &quot;Quia ipsum assumenda est neque. Vero neque vel nihil dolorum. Et numquam repudiandae ipsa quos quis sapiente tempora. Assumenda velit ab rerum corrupti sit ullam.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;80928&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$809.28&quot;
            },
            &quot;sku&quot;: &quot;SKU-4504-txyn&quot;,
            &quot;stock&quot;: 90,
            &quot;category&quot;: {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;Gia Flatley&quot;,
                &quot;slug&quot;: &quot;gia-flatley&quot;
            }
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;provident ad voluptatem&quot;,
            &quot;description&quot;: &quot;Et et accusamus et. Eveniet quaerat non similique et soluta. Alias molestiae voluptatem eum eligendi voluptas ut.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;10958&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$109.58&quot;
            },
            &quot;sku&quot;: &quot;SKU-5983-whxn&quot;,
            &quot;stock&quot;: 8,
            &quot;category&quot;: {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Enid Raynor&quot;,
                &quot;slug&quot;: &quot;enid-raynor&quot;
            }
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;et enim quia&quot;,
            &quot;description&quot;: &quot;Nisi dolores incidunt laboriosam pariatur eius aliquam itaque. Aut ea ut aut ut harum. Consectetur pariatur veritatis ut non est. Voluptatum consectetur qui recusandae.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;82904&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$829.04&quot;
            },
            &quot;sku&quot;: &quot;SKU-8050-ogim&quot;,
            &quot;stock&quot;: 92,
            &quot;category&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Malika Osinski&quot;,
                &quot;slug&quot;: &quot;malika-osinski&quot;
            }
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;sunt est quidem&quot;,
            &quot;description&quot;: &quot;Dolor excepturi rerum aut numquam pariatur pariatur. Omnis esse labore et nihil voluptatum eveniet. Blanditiis aut fugiat minus iste libero autem.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;64696&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$646.96&quot;
            },
            &quot;sku&quot;: &quot;SKU-5092-dddn&quot;,
            &quot;stock&quot;: 75,
            &quot;category&quot;: {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;Fannie D&#039;Amore&quot;,
                &quot;slug&quot;: &quot;fannie-damore&quot;
            }
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;suscipit non ut&quot;,
            &quot;description&quot;: &quot;Eaque quo sequi iusto et cum. Quaerat quo et blanditiis est consequuntur et est labore. Ex adipisci laboriosam sed aut id sequi voluptas reiciendis.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;76507&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$765.07&quot;
            },
            &quot;sku&quot;: &quot;SKU-7813-yoot&quot;,
            &quot;stock&quot;: 91,
            &quot;category&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Malika Osinski&quot;,
                &quot;slug&quot;: &quot;malika-osinski&quot;
            }
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;commodi veniam incidunt&quot;,
            &quot;description&quot;: &quot;Ea similique necessitatibus non et. Officiis autem dolor sit voluptatem nihil eum architecto. Magnam dolor id quod est.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;33735&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$337.35&quot;
            },
            &quot;sku&quot;: &quot;SKU-7355-eamx&quot;,
            &quot;stock&quot;: 56,
            &quot;category&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Malika Osinski&quot;,
                &quot;slug&quot;: &quot;malika-osinski&quot;
            }
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;voluptatem ut consequuntur&quot;,
            &quot;description&quot;: &quot;Sunt magnam sint esse facilis. Alias accusamus quo recusandae temporibus.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;79544&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$795.44&quot;
            },
            &quot;sku&quot;: &quot;SKU-5204-fusr&quot;,
            &quot;stock&quot;: 93,
            &quot;category&quot;: {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;Gia Flatley&quot;,
                &quot;slug&quot;: &quot;gia-flatley&quot;
            }
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;eveniet sit quam&quot;,
            &quot;description&quot;: &quot;Esse dolorem id assumenda officiis eum excepturi. Modi iste dolores quam voluptatem vero.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;45871&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$458.71&quot;
            },
            &quot;sku&quot;: &quot;SKU-6460-mozz&quot;,
            &quot;stock&quot;: 2,
            &quot;category&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Marilie Boehm&quot;,
                &quot;slug&quot;: &quot;marilie-boehm&quot;
            }
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;in sapiente dolorem&quot;,
            &quot;description&quot;: &quot;Velit ut voluptas vel quibusdam ipsa ea. Deleniti vel aut assumenda et saepe molestiae. Nemo qui et laboriosam est.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;70245&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$702.45&quot;
            },
            &quot;sku&quot;: &quot;SKU-7965-sgyn&quot;,
            &quot;stock&quot;: 75,
            &quot;category&quot;: {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;Gia Flatley&quot;,
                &quot;slug&quot;: &quot;gia-flatley&quot;
            }
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;nisi dicta ut&quot;,
            &quot;description&quot;: &quot;Sed vel et distinctio reprehenderit ea aspernatur aut. Alias ab quia nam qui molestiae.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;58181&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$581.81&quot;
            },
            &quot;sku&quot;: &quot;SKU-6012-xtut&quot;,
            &quot;stock&quot;: 76,
            &quot;category&quot;: {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;Fannie D&#039;Amore&quot;,
                &quot;slug&quot;: &quot;fannie-damore&quot;
            }
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;voluptas libero nemo&quot;,
            &quot;description&quot;: &quot;Recusandae commodi impedit amet vel. Labore esse quos aut. Dolor ipsum excepturi officia necessitatibus libero consequatur animi. Vitae ea at sequi temporibus ab et alias.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;15888&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$158.88&quot;
            },
            &quot;sku&quot;: &quot;SKU-8218-uwvh&quot;,
            &quot;stock&quot;: 41,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Lina Lindgren&quot;,
                &quot;slug&quot;: &quot;lina-lindgren&quot;
            }
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;aut corrupti quia&quot;,
            &quot;description&quot;: &quot;Perferendis magnam provident quos enim tempore ut iure. Temporibus animi dolorem aut tempore nihil illo. Natus placeat ut reprehenderit saepe.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;96412&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$964.12&quot;
            },
            &quot;sku&quot;: &quot;SKU-0456-rdqq&quot;,
            &quot;stock&quot;: 14,
            &quot;category&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Shyanne Wiegand&quot;,
                &quot;slug&quot;: &quot;shyanne-wiegand&quot;
            }
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;dolores consequatur qui&quot;,
            &quot;description&quot;: &quot;Nam earum blanditiis voluptatem ex est vitae. Ut odit occaecati placeat quae amet sit. Ex quam quaerat nulla ullam harum velit ipsam.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;25068&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$250.68&quot;
            },
            &quot;sku&quot;: &quot;SKU-6026-vrka&quot;,
            &quot;stock&quot;: 75,
            &quot;category&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Lina Lindgren&quot;,
                &quot;slug&quot;: &quot;lina-lindgren&quot;
            }
        },
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;consequatur et sit&quot;,
            &quot;description&quot;: &quot;Quo eum tempora odio quod nam ut. Et facilis ut cum voluptatum. Odio itaque quia a quo. Aperiam tempora doloribus pariatur velit aut deleniti.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;46426&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$464.26&quot;
            },
            &quot;sku&quot;: &quot;SKU-2612-fdpw&quot;,
            &quot;stock&quot;: 53,
            &quot;category&quot;: {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;Fannie D&#039;Amore&quot;,
                &quot;slug&quot;: &quot;fannie-damore&quot;
            }
        },
        {
            &quot;id&quot;: 15,
            &quot;name&quot;: &quot;incidunt fuga nemo&quot;,
            &quot;description&quot;: &quot;Aut aperiam excepturi et repudiandae est a et. Eum reiciendis earum quasi eum reiciendis enim nam. Earum iusto itaque sint et. Facilis voluptatem explicabo corrupti non voluptatem.&quot;,
            &quot;price&quot;: {
                &quot;amount&quot;: &quot;84222&quot;,
                &quot;currency&quot;: &quot;USD&quot;,
                &quot;formatted&quot;: &quot;$842.22&quot;
            },
            &quot;sku&quot;: &quot;SKU-5672-awul&quot;,
            &quot;stock&quot;: 26,
            &quot;category&quot;: {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Enid Raynor&quot;,
                &quot;slug&quot;: &quot;enid-raynor&quot;
            }
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost/api/v1/products?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost/api/v1/products?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://localhost/api/v1/products?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/products?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/products?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/products?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost/api/v1/products&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 15,
        &quot;total&quot;: 26
    }
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
    --get "http://localhost/api/v1/products/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/products/architecto"
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
            <p>Example response (404):</p>
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
    &quot;message&quot;: &quot;No query results for model [Src\\Products\\Domain\\Models\\Product] architecto&quot;
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
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
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
