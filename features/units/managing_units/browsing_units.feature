@managing_units
Feature: Browsing units
  In order to see all units in the store
  As an Administrator
  I want to browse units of measurement

  Background:
    And the store has unit "Meter" with symbol "m"
    And the store has unit "Kilogram" with symbol "kg"
    And I am logged in as an administrator

  @ui
  Scenario: Browsing currencies in store
    When I want to browse units of the store
    Then I should see 2 units in the list
    And I should see the unit "Kilogram" in the list
