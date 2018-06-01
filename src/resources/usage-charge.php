<?php

return array(
    "operations" => array(
        "createUsageCharge" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/recurring_application_charges/{recurring_charge_id}/usage_charges.json",
            "summary" => "Create a new usage charge based on existing recurring charge",
            "responseModel" => "UsageChargeResponse",
            "parameters" => array(
                "recurring_charge_id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "required" => true
                ),
                "usage_charge" => array(
                    "type" => "object",
                    "location" => "json",
                    "required" => true,
                    "properties" => array(
                        "description" => array(
                            "type" => "string",
                            "required" => true
                        ),
                        "price" => array(
                            "type" => "string",
                            "required" => true
                        )
                    )
                )
            )
        ),
        "getUsageCharge" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/recurring_application_charges/{recurring_charge_id}/usage_charges/{usage_charge_id}.json",
            "summary" => "Retrieve a single usage charge",
            "responseModel" => "UsageChargeResponse",
            "parameters" => array(
                "recurring_charge_id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "required" => true
                ),
                "usage_charge_id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "required" => true
                )
            )
        ),
        "getUsageCharges" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/recurring_application_charges/{recurring_charge_id}/usage_charges.json",
            "summary" => "Retrieve all usage charges",
            "responseModel" => "UsageChargesResponse",
            "parameters" => array(
                "recurring_charge_id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "required" => true
                )
            )
        ),

    ),

    "models" => array(
        "UsageCharge" => array(
            "type" => "object",
            "properties" => array(
                "id" => array(
                    "type" => "string",
                ),
                "description" => array(
                    "type" => "string",
                ),
                "price" => array(
                    "type" => "string"
                ),
                "created_at" => array(
                    "type" => "string"
                ),
                "billing_on" => array(
                    "type" => "string"
                ),
                "balance_used" => array(
                    "type" => "string"
                ),
                "balance_remaining" => array(
                    "type" => "string"
                ),
                "risk_level" => array(
                    "type" => "string"
                )
            )
        ),
        "UsageChargeResponse" => array(
            "type" => "object",
            "location" => "json",
            "properties" => array(
                "usage_charge" => array(
                    "\$ref" => "UsageCharge"
                )
            )
        ),
        "UsageChargesResponse" => array(
            "type" => "object",
            "location" => "json",
            "properties" => array(
                "usage_charges" => array(
                    "type" => "array",
                    "items" => array(
                        "\$ref" => "UsageCharge"
                    )
                )
            )
        )
    )
);
