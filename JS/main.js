document.write(`
<nav>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>
</nav>

<section id="sec-1">
<div class="background">
    <h1><span>Adven</span>ture</h1>
</div>
</section>

`);

    const inputName = [
      {
        id:'select-all',
        name:'All'
      },
      {
        id:'hiking',
        name:'Hiking'
      },
      {
        id:'cycling',
        name:'Cycling'
      },
      {
        id:'yoga',
        name:'Yoga'
      },
      {
        id:'running',
        name:'Running'
      },
      {
        id:'walking',
        name:'Walking'
      },
      {
        id:'swimming',
        name:'Swimming'
      },
      {
        id:'skiing',
        name:'Skiing'
      }
    ];


    for(let checkbox = 0; checkbox < inputName.length; checkbox++){
      document.write(`
      <input type="radio" id="${inputName[checkbox].id}" name="button">
      <label for="${inputName[checkbox].id}">
      ${inputName[checkbox].name}
      </label>
      `);
    }


function cards(){
document.write(`
<div class="main-boxes gallery" id="card">`);
for(let i = 0; i < cardsArray.length; i++){
    document.write(`
    <div class="display">
    <div class="box  ${cardsArray[i].class}" ${cardsArray[i].dataName}>
    <div class="all-img ${cardsArray[i].class}">
    <img class="img-slider-1" src="${cardsArray[i].imgs[0]}" alt="" />
    <img class="img-slider-2" src="${cardsArray[i].imgs[1]}" alt="" />
    <img class="img-slider-3" src="${cardsArray[i].imgs[2]}" alt="" />
    </div>
    <div class="box-information ${cardsArray[i].class}">
      <h3>
        ${cardsArray[i].title}
      </h3>
      <h4 >
       ${cardsArray[i].paragraph}
      </h4>
      <p>
      <a href="${cardsArray[i].href}" target="_blank">
      <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
      ${cardsArray[i].location}
      </a>
      </p>
  </div>    
  </div>    
  </div>    
    `);
}


document.write(`</div>
<div class="load-more-btn">
<a href="" class="load-more btn btn-danger">Load More</a>
</div>
`);
}

cards();





document.write(`<footer>
Copyrights &copy;2022 Adventure pvt. ltd.  All rights reserved.
</footer>            
  `)