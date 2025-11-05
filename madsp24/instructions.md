# My web solution: Back-End

## Introduction

In this assignment, you will use the front-end components you developed from the previous assignment and connect them with proper data and data manipulation using a back-end system.
The purpose of this assignment is to get you acquainted with the basics of server-side development, using a modern MVC framework: Laravel.

You must submit your answer to itslearning and ScalableTeaching.
We will provide you with dedicated feedback on each submission.
You are allowed to work in pairs, but no more than two!

<span style="color:red">**Disclaimer 1: use of AI** We discourage the use of generative AI to develop this application. The goal of this assignment is to prepare you for the exam, and we will provide feedback on something that **you** make.</span>

<span style="color:red">**Disclaimer 2: exam** We use this and the following assignments as preparation for the exam. We try to be as close as possible to the exam. However, be aware that not every question from the assignments will be present, and we may ask questions that are not included in the assignments.</span>


## Setup

### Questions Submission

In this assignment, you must answer xx questions.
These questions are provided via assignments using itslearning.
The questions are:
* Question 1: CRUD operations
* Question 2: Models from MVC
* Question 3: Data validation


We recommend that you work on the code first and then answer the questions.
In contrast to the previous assignment, the questions of this assignment are related to the code.


### Code Submission

We have provided you with a repository (the same one this file is in) through Scalable Teaching, where you will submit any code you create.
Alongside this file, you will find a Laravel project with several tests.
To fulfill this assignment, all tests must be green.

To submit your assignment, simply push it to the repository.
Only the latest push before the deadline will be looked at, so feel free to save your progress as you go.

**Important!**
Remember to double-check that all of your changes are correctly committed and pushed to the GitLab repository we have provided.

## Code reflections

In this assignment, you must develop the back-end component of a *CRUD*-type application.
When developing a web application, it is essential to be explicit about your decisions and follow *good* practices.

### Question 1: CRUD operations

During this activity, you develop a web application based on CRUD operations.
Quickly explain how these operations are supported in your system:
* How is the data being handled from the front-end to the back-end and database, and back?
* What are the HTTP methods used in your application for each operation?
* How did you handle the correct HTTP methods?

### Question 2: Models from MVC

For this web application, you are using an MVC framework to develop it. Explain the *Model* part of the MVC:
* What is a Model in MVC?
* What model(s) do you have in your application?
	* If you have more than one, please explain how they relate to each other (use a class diagram)
* How is this model related to the database?
* How do you use this model to retrieve or update the resources from the database?

### Question 3: Data validation

During the previous assignment, you validated the data being input in a form using JavaScript. Explain:
* Is JavaScript validation enough to have *consistent resources* in your database? Why yes/no?
* Independently of the answer to the previous question, would you validate data both at the front-end and back-end side? Why yes/no?

## The application


In this assignment, you must develop the back-end of the already developed CRUD operations front-end.
Be aware of the URLs and HTTP methods used for every operation.
To do this, your application should consider:

* Database and Data
	* For developing purposes, you must develop migration files for setting up the database
	* For testing purposes, you must also populate the database with testing data
* Index page:
	* It should contain a link to go to another page to create a resource
	* It should display every resource from the database
	* For every element, there must be three links/buttons: see more, edit element, and delete it from the database
* Create page:
	* It should contain a form to create a new resource
	* When the form is submitted, it should create a new resource, and redirect to the index page with a success message
* Read page:
	* This page should list all information from the resource
* Update page:
	* It should contain the same form from the create page, with information about the resource to be updated
	* When submitting the information, the resource must be updated, the user should be redirected to the Read page, and a success message should appear 
* Delete page:
	* There is no dedicated delete page, but there is a link to delete a resource in the Index page
	* When an element is deleted, the user should be redirected to the index page, and a success message should appear

### Task 0: Data and Testing Configuration

To develop and test your application correctly, you should create migration files that enable developers to run and test it with their own database.
Moreover, you should also create seed files to enable databases to have testable data.

Finally, in the `.env` and `.env.example` file, you should set the following variable:

	ASSIGNMENT_RESOURCE = {my_resource_class_name}

Where `{my_resource_class_name}` is the name of the class that represents the resource being used in the application.

### Task 1: Index Page

The index page should display every *main* resource from your database, along with links to other parts of your application.
For testing, you must add extra attributes to your HTML elements.
For each resource in the page, you should add a `dusk="element"` attribute.
For the link that goes to the create page, you should add a `dusk="to-create"`.

The index page should be at the root of your application, accessible via the `/` url.

### Task 2: Create Page

The create page should have a form that allows users to submit information to create a new resource.
Due to the nature of the project, **you should ask the TAs to create the tests for your use case**.

When submitting the information, a new resource must be added to the database.
Then, the user is redirected to the index, where they can see the new resource in the list of resources.
Moreover, a success message "Entity added successfully" should be displayed inside a div with `dusk="success-msg"` attribute.
This message should only be displayed when the resource was created.

The create page should be accessible via the `/create` URL.
Then, the URL `/` should be used as the form action, with the proper HTTP Method.


### Task 3: Show Page

The show page should contain information about every resource.
The information presented on the page depends on the particular resource being loaded.
The URL should have the form of `/{id}`, where `id` represents the database ID of the particular resource being displayed.

Similar to the Create Page, **you should ask the TAs to create the tests for your use case**.

### Task 4: Update Page

The update page combines elements from both the Create and Show pages.
It has the same form as the Create Page, but filled with the information of the resource being updated.
When the resource is updated successfully, the user is redirected to the index page.
Moreover, a success message "Entity updated successfully" should be displayed inside a div with `dusk="success-msg"` attribute.
This message should only be displayed when the resource was updated in the database.

The URL to access the edit page of a resource has the form `/{id}/edit`.
This URL should be accessible from the index, on a clickable element with the  `dusk="to-edit"` attribute.
The URL used as the form action is `/{id}`, with the proper HTTP method.
**Hint:** Be aware that forms only accept HTTP methods `GET` and `POST`.

Similar to the previous cases, **you should ask the TAs to create tests for your use case**.

### Task 5: Delete Page

As mentioned earlier, there is no dedicated delete page; however, this action can be performed in the Index page.
To perform this action, you should have a form with a submit button instead of a link (i.e., you may have implemented the delete action with a link during the previous assignment).

The form should have the URL `/{id}` as the action, where `id` represents the resource being deleted, and the form should use the correct HTTP method. **Hint:** Be aware that forms only accept HTTP methods `GET` and `POST`.

When submitting this delete form, the element is being removed, and the user is being redirected to the index.
This means the element is not present in the index.
Moreover, a success message "Entity deleted successfully" should be displayed inside a div with the `dusk="success-msg"` attribute.
This message should only be displayed when the resource was deleted from the database.