<?php

$factory->define(App\Sale::class, function (Faker\Generator $faker) {
    return [
        "file_number" => $faker->name,
        "client" => $faker->name,
        "property" => $faker->name,
        "city_town_village" => $faker->name,
        "county" => $faker->name,
        "buyer" => $faker->name,
        "agent" => $faker->name,
        "buyer_attorney" => $faker->name,
        "rep_agmt" => $faker->name,
        "approval_letter" => $faker->name,
        "buyer_approval_letter" => $faker->name,
        "search_update" => $faker->name,
        "survey_update" => $faker->name,
        "tax_receipts" => $faker->name,
        "tax_certificate" => $faker->name,
        "sewer_water_compliance" => $faker->name,
        "proposed_deed" => $faker->name,
        "mortgage_commitment" => $faker->name,
        "seach_taxes_deed" => $faker->name,
        "mortgage_payoff_info" => $faker->name,
        "title_report_from_buyer" => $faker->name,
        "clsoing_docs_drafted" => $faker->name,
        "closing_statement" => $faker->name,
        "closing_statement_to_buyer" => $faker->name,
        "closing_date" => $faker->name,
        "notes" => $faker->name,
        "internal_notes" => $faker->name,
        "rates" => $faker->name,
        "assigned_to_id" => factory('App\User')->create(),
        "created_by_id" => factory('App\User')->create(),
    ];
});
