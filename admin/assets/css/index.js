//Variables for Hamburger Button 
const hamburger = document.getElementsByClassName('hamburger')[0]
const menubar = document.getElementsByClassName('menu-bar')[0]

//Adding Event Listener for my button and menubar for a tablet and Phone view
hamburger.addEventListener('click', () => {
  menubar.classList.toggle('active')
})

//The function is for searching in for the Food Section 
const search = () => {

  //CaLling the id Search for the Input and making the value input to an uppercase 
  const searchBox =  document.getElementById("search").value.toUpperCase();

  //Getting the whole food list 
  const storeitems = document.getElementById("food-list")

  // This will display the card box div when the user input in the searchBox variable
  const foods = document.querySelectorAll(".card-shadow")

  /* This will search for the name in the H3 Tag of the Card Box an Example is 
  searching Adobo with the use of the Store Items and it will find the Adobo h3 tag
  */
  const foodName = storeitems.getElementsByTagName("h3")

  
  // This part will be displaying the Error if no recipe is searched
  let noResult = document.querySelector('p')

  //Search Filter for the Food Recipe


  // variable found called for boolean and set to false
  let found = false;

  /* i use the for loop and call the foodName variable  and get the length of it
    and match var will be the responsible for the output of searched
  */
  for(let i = 0; i < foodName.length; i++){
    let match = foods[i].getElementsByTagName('h3')[0];
    // if else and with the condition match and get the expression if one is true on the OR operation
    if(match){
      let textValue = match.textContent || match.innerHTML

    // then textvalue condition will be responsible if there is a recipe or not
      if(textValue.toUpperCase().indexOf(searchBox) >  -1){
        foods[i].style.display = "";
        found = true;
      }else{
        foods[i].style.display = "none";
      }
    }
  }
  if (found){
    noResult.style.display = "none";
  }
  else{
    noResult.style.display = '';
  }
}



