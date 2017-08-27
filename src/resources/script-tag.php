<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */

    "operations" => array(

      /**
         *    getScriptTags() method
         *
         *    reference: https://help.shopify.com/api/reference/scripttag
         */
        "getScriptTags" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/script_tags.json",
            "summary" => "Receive a list of all script tags.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results (default: 50) (maximum: 250)."
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Page to show (default: 1)."
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID."
                ),
                "created_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show script tags created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show script tags created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show script tags last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show script tags last updated before date (format: 2008-12-31 03:00)."
                ),
                "src" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show script tags with a given URL"
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "comma-separated list of fields to include in the response"
                ),
            )
        ),

       /**
         *    getScriptCount method
         *
         *    reference: https://docs.shopify.com/api/uiintegrations/scripttag
         */
        "getScriptCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/script_tags/count.json",
            "summary" => "Get a count of all script tags for your shop.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "src" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Count script tags with given URL."
                ),
            )
        ),

       /**
         *    getScriptTag() method
         *
         *    reference: https://docs.shopify.com/api/uiintegrations/scripttag
         */
        "getScriptTag" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/script_tags/{id}.json",
            "summary" => "Get a single script tags by its ID.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the script tag."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "comma-separated list of fields to include in the response."
                ),
            )
        ),

       /**
         *    createScriptTag() method
         *
         *    reference: https://docs.shopify.com/api/uiintegrations/scripttag
         */
        "createScriptTag" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/script_tags.json",
            "summary" => "Create a new script tag.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "script_tag" => array(
                    "location" => "json",
                    "parameters" => array(
                        "event" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The DOM event which triggers the loading of the script. Currently, \"onload\" is the only supported event."
                        ),
                        "src" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The URL of the remote script."
                        )
                    )
                )
            )
        ),

       
        /**
         *    updateScriptTag() method
         *
         *    reference: https://help.shopify.com/api/reference/scripttag
         */
        "updateScriptTag" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/script_tags/{id}.json",
            "summary" => "Update a script tag.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The scripts ID number.",
                    "required" => true
                ),
                "script_tag" => array(
                    "location" => "json",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The scripts ID number."
                        ),
                        "src" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        )
                    )
                )
            )
        ),

        /**
         *    deleteScriptTag() method
         *
         *    reference: https://help.shopify.com/api/reference/scripttag
         */
        "deleteScriptTag" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/script_tags/{id}.json",
            "summary" => "Delete a script tag.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The script tag ID number.",
                    "required" => true
                )
            )
        ),


        
    ),
    

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */

    "models" => array(

    ),
);
