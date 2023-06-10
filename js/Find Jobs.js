// Get references to the buttons and lists
var button1 = document.getElementById("button1");
var button2 = document.getElementById("button2");
var listItems1 = document.querySelector(".list-items1");
var listItems2 = document.querySelector(".list-items2");
var slider = document.getElementById("slider");
// Add click event listeners to the buttons
button1.addEventListener("click", function() {
  // Toggle the visibility of list-items1
  listItems1.style.display = listItems1.style.display === "none" ? "block" : "none";
  slider.style.marginTop = listItems1.style.display === "none" ? "" : "300px";
  
});

button2.addEventListener("click", function() {
  // Toggle the visibility of list-items2
  listItems2.style.display = listItems2.style.display === "none" ? "block" : "none";
  slider.style.marginTop = listItems2.style.display === "none" ? "" : "150px";
});


// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', function() {
    // Get all the slides
    var slides = document.querySelectorAll('.slide');
  
    // Hide all slides except the first one
    for (var i = 1; i < slides.length; i++) {
      slides[i].style.display = 'none';
    }
  
    // Get all the swiper buttons
    var swiperButtons = document.querySelectorAll('.swiper-button');
  
    // Add click event listener to each swiper button
    swiperButtons.forEach(function(button, index) {
      button.addEventListener('click', function() {
        // Hide all slides
        for (var i = 0; i < slides.length; i++) {
          slides[i].style.display = 'none';
        }
  
        // Show the selected slide
        slides[index].style.display = 'block';
      });
    });
  });



  function filterBoxes(category) {
    // Get all the box elements
    var boxes = document.getElementsByClassName("box");
    var slider = document.getElementById("slider");
  
    // Iterate over the boxes and hide/show them based on the selected category
    for (var i = 0; i < boxes.length; i++) {
      var box = boxes[i];
      var dataCategory = box.getAttribute("data-category");
  
      if (category === "all" || dataCategory === category) {
        box.style.display = "block"; // Show the box

      } else {
        box.style.display = "none"; // Hide the box
      }
      
    }
      
  }
  
  
  // Handle click event on box elements
  var boxes = document.getElementsByClassName('box');
  var jobDescriptions = document.getElementsByClassName('job-description');
  
  for (var i = 0; i < boxes.length; i++) {
    boxes[i].addEventListener('click', function() {
      var boxId = this.id;
      var boxNumber = boxId.substring(3); // Assuming the ID format is "boxX" where X is the box number
      
      // Hide all job descriptions
      for (var j = 0; j < jobDescriptions.length; j++) {
        jobDescriptions[j].style.display = 'none';
      }
      
      // Display the clicked job description
      var jobDescription = document.getElementById('job-description' + boxNumber);
      jobDescription.style.display = 'block';
    });
  }