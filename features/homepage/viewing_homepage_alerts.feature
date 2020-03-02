@viewing_homepage_alerts
Feature: Viewing alerts on main page
  In order to see any important updates
  As an Visitor
  I want to be able to see alerts on the homepage

  Background:
    Given the store operates on a single channel in "United States"

  @ui
  Scenario: Viewing an alert on the main page
    When I check latest products
    Then the alert with class "homepage-alert" should be visible
