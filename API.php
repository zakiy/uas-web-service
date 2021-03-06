#%RAML 0.8
title: Laptops API


/Laptops:
  displayName: Laptops
  description: Resource Laptops
  post:
    description: Laptops ~
  get:
    description: Laptops ~
    responses:
      200:
        body:
          application/json:
            example: |
              {
                status: "ok",
                {
                  ID: "111",
                  Brand: "ACER",
                  Model: "ASPIRE 4752G",
                  release_year : "2014",
                },
                {
                  ID: "222",
                  Brand: "TOSHIBA",
                  Model: "Satellite C640",
                  release_year: "2011",
              
      505:
/Laptops
	displayName: Laptops
	description: Resource Laptops
  /{ID}:
    displayName: ID  
    description: Resource ID

    /brand:
      displayName: brand
      description: Resource brand
	  
/model:
  displayName: model
  description: Resource model
  
/release_year: 
	displayName: release_year
	description: Resource release_year

/Parts
  displayName : Parts
  description : Resource Parts
  /{ID}:
    displayName: ID  
    description: Resource ID
    
    /laptop_id:
      displayName: laptop_id
      description: Resource laptop_id
	  
	 /part_category: 
	  displayName : part_category
	  description : Resource part_category
	  
	  /part_number: 
	  displayName : part_number
	  description : Resource part_number
	  
	  /description : 
	  displayName : descripttion
	  description : Resource description
  
/parts_categories:
  displayName: parts_categories
  description: Resource parts_categories
  
   /{ID}:
    displayName: ID  
    description: Resource ID

    /categories_name:
      displayName: categories_name
      description: Resource categories_name
