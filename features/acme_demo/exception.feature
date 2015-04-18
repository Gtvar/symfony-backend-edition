Feature: Acme demo "Exception" testing
  
  Background: 
    Given path "/"
    
  Scenario: Call to "exception" method
    When I send a request to "exception" without params
    Then the response should be error with id "1", message "Sorry..."