<?php

return array(
    "operations" => array(
        "createStorefrontAccessToken" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/storefront_access_tokens.json",
            "summary" => "Create a storefront access token",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "storefront_access_token" => array(
                    "type" => "object",
                    "location" => "json",
                    "properties" => array(
                        "title" => array(
                            "type" => "string",
                            "location" => "json"
                        ),
                        "access_scope" => array(
                            "type" => "string",
                            "location" => "json",
                            "required" => true
                        )
                    )
                )
            )
        ),
        "deleteStorefrontAccessToken" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/storefront_access_tokens/{id}.json",
            "summary" => "Delete storefront access token",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "location" => "uri",
                    "type" => "string",
                    "required" => true
                )
            )
        ),
        "getStorefrontAccessTokens" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/storefront_access_tokens.json",
            "summary" => "Retrieve all storefront access tokens",
            "responseModel" => "defaultJsonResponse"
        )
    )
);
