paas-sitebuilder
================


- drop suggestions inside /suggestions


**geting started, for developers**

- clone repo- ``` git clone https://github.com/perezkarjee/paas-sitebuilder.git ```
- please write a well commented and clean code
- use less external depedencies
- try to build a very scalable application(app that can work on clusters rather than only a single server)

**APIs that will be used**
- API For storing external files for customers- AWS S3 API http://docs.aws.amazon.com/aws-sdk-php/latest/class-Aws.S3.S3Client.html


- paypal API for payment processing- https://developer.paypal.com

- cloudflare API for DNS & routing https://www.cloudflare.com/docs/client-api.html


**Architecture Notes**
- the static content files such as images,videos, etc uploaded by customers will be stored on AWS S3
 
- the actual contents such as templates/styles/pages/etc will be stored on the database, no changes will be made by
 customers to the application servers(by this i mean the app servers will be read-only and all the content changes will be made on the database servers)

- the DNS will be handled by cloudflare


**how the page will be served to the visitor**

 ```>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  ```

  ``` visitor >> abc.site.com >> cloudflare DNS >> Load Balancer >>  ```
  
  ```<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  ```

  ``` Database(check for requested url 'abc.site.com') << App Server << ```

 ``` >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  ```

 ``` >> [[if found]] get stored codes >> App server (generate HTML page) >> Visitor```
