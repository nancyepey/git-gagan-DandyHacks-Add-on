// getting container
const container = document.querySelector('.cardContainer');

async function Quotes() {
   const response =  await fetch("https://type.fit/api/quotes");
   console.log(response);
   //consverting the response into json
   const data = await response.json();
   console.log(data);
  generateHTML(data);
}


Quotes();

