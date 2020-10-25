// getting container
let container = document.getElementById('cardContainer');

async function Quotes() {
   const response =  await fetch("https://type.fit/api/quotes");
   console.log(response);
   //consverting the response into json
   const data = await response.json();
   console.log(data);
  generateHTML(data);
}


Quotes();


function generateHTML(results) {

    // const to have all the html
    let generatedHTML = '';

    results.forEach(arr => {
         console.log(arr);
         //genreated html
         generatedHTML += 
         `
         <div class="card" style="background-color:rgb(153, 29, 224);">
             <h2>${arr.text}</h2>
             <p>${arr.author}</p>
         </div>
         `
        });

    //appending the generated html to the div search result
    console.log(container);
    container.innerHTML = generatedHTML;
}
