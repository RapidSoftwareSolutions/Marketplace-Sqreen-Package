[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Sqreen/functions?utm_source=RapidAPIGitHub_SqreenFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Sqreen Package
The Sqreen API allows you to tap into our extensive knowledge base to discover security risks hiding in your own data. Find out whether that email address is from an anonymizing service, or that IP address is a Tor exit point. You can even find out if the address has been implicated in a past security attack.
* Domain: [sqreen.io](https://www.sqreen.io/)
* Credentials: apiKey

## How to get credentials: 
1. Sign in [sqreen.io](https://www.sqreen.io/)
2. Register a [new app](https://my.sqreen.io/new-application) 
3. Navigate to Settings -> API
4. Copy your API Key


## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## Sqreen.analyzeEmail
Use this endpoint to uncover more information about an email address. Sqreen has an extensive database of known attackers, as well as analysis on an email address's origins. Discover whether this email address is from an anonymizing service, or was used in an attack, and use this data to make policy decisions based on how risky we assess the email address to be.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key
| email | String     | The email address.

## Sqreen.analyzeIp
Use this endpoint to uncover more information about an IP address. Sqreen has an extensive database of known attackers, as well as analysis on who or what an IP address belongs to. Discover whether this IP address is a Tor exit point or was used in an attack, and use this data to make policy decisions based on how risky we assess the IP address to be.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key
| ip    | String     | The IP address.

