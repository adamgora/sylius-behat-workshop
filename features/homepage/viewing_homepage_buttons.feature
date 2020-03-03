@viewing_homepage_buttons
Feature: Viewing links to latest products
  In order to be able to see links to latest products
  As an Visitor
  I want to be able to see product links on the homepage

  Background:
    Given the store operates on a single channel in "United States"
    And the store has a product "PHP T-Shirt"

  @javascript
  Scenario: Following latest products link
    When I visit homepage
    And I wait for the link with class "latest-products" to appear
    And I click on link with class "latest-products"
    Then I should see the product name "PHP T-Shirt"
