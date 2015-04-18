Feature: Acme demo "Hello world" feature

  Background:
    Given path "/"
  
  Scenario: Hello world without parameters
    When I send a request to "hello.world" without params
    Then the response should be error with id "2", message "Request not valid.", data:
      | name | This value should not be blank. |

  Scenario: Success called to Hello World
    When I send a request to "hello.world" with params:
      | name | Vitaliy |
    Then response is successfully