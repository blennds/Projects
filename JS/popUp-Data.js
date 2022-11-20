// FUNCTION WHEN WE CLICKED TO SHOW US THE MODAL
function popUpData() {
  const dataArray = [
    {
      dataTarget: 'data-target="p-1"',
      img: [
        "../img/event1-img/events1.jpg",
        "../img/event1-img/events2.jpg",
        "../img/event1-img/events3.jpg",
        "../img/event1-img/events4.jpg",
      ],
      title: "AlpHike Hiking",
      paragraph:
        "If you want a stunning, rejuvenating trip to the Alps, you won’t find a better combination than Bjeshket e Nemuna. One of the many joys of basing in one hotel for a few days is getting to know that place. You unpack at your hotel and leave it be for awhile. Explore the hidden corners. Try the yogurt and Muesli one morning, the eggs and croissant the next. On this trip, we will wake up, exhale, explore for a bit, come home, relax, enjoy a great dinner together, and get a great sleep. Then we’ll do it again!",
      href: "https://www.google.com/maps/place/Bjeshk%C3%ABt+e+Nemuna+-+National+Park/@42.6234183,20.1857219,549m/data=!3m2!1e3!4b1!4m5!3m4!1s0x1352f85745f8aed7:0x76130a90fb191c38!8m2!3d42.6234144!4d20.1879106",
      location: `Bjeshkët e Nemuna`,
    },
    {
      dataTarget: 'data-target="p-2"',
      img: [
        "../img/event2-img/events1.jpg",
        "../img/event2-img/events2.jpg",
        "../img/event2-img/events3.jpg",
        "../img/event2-img/events4.jpg",
      ],
      title: "Swimming Winter",
      paragraph: `Event "Swimming Winter to the Finale" and party
      The event starts at 17.10 and ends at 22.00. The event takes place after dark in a LED-lit pool. It is an event where anyone can swim at a freely chosen time, freely chosen distance and freely chosen times. The swimming style is freestyle. The goal is to find out which community can swim the most meters. Every 25m, the distance to the community that the swimmer represents is written down. All  represent their country as a community at this event. At the event, you can watch the results directly on the big screen.`,
      href: "https://www.google.com/maps/place/Batlavsko+Jezero/@42.8183591,21.2915476,14z/data=!4m5!3m4!1s0x1354baa3cf491ec5:0x9efa0a91dbc952ff!8m2!3d42.8197002!4d21.3128213",
      location: `Liqeni i Batllavës`,
    },
    {
      dataTarget: 'data-target="p-3"',
      img: [
        "../img/event3-img/events1.jpg",
        "../img/event3-img/events2.jpg",
        "../img/event3-img/events3.jpg",
        "../img/event3-img/events4.jpg",
      ],
      title: "Cycling & Running",
      paragraph: `ADVENTURE invites you to our 40th Kosovo Roll Bicycle Rally and Running! This year, we will have four routes. There will be plenty of sag wagons and rest stops, including the Raising Cane’s Chicken Fingers Stop at Wishbone Pass, the Rudy’s BBQ stop for the 68-mile route, and our greatest-ever Celebration Station at the finish line. The Ride Send-off: October 30th, 2022, at the Parku i Germis, Prishtine. `,
      href: "https://www.google.com/maps/place/Parku+i+G%C3%ABrmis%C3%AB/@42.6733589,21.1961553,17z/data=!3m1!4b1!4m5!3m4!1s0x135498c8d947c13b:0x88dccb859e41064!8m2!3d42.673355!4d21.198344",
      location: `Parku i Gërmisë`,
    },
    {
      dataTarget: 'data-target="p-4"',
      img: [
        "../img/event4-img/events1.jfif",
        "../img/event4-img/events2.jfif",
        "../img/event4-img/events3.jfif",
        "../img/event4-img/events4.jfif",
      ],
      title: "Yoga & Strech",
      paragraph: `One Small Positive Thought in the Morning. How Yoga Impacts the Mind, Body & Spirit. Treat Autism & ADHD Anxiety & Depression. Schedule An Appointment. Chat Support Available. Donate Online. View Programs. Services: Nutrition Consultation, Diet Consultation. Come with us on  31th October 2022`,
      href: "https://www.google.com/maps/place/Parku+i+qytetit/@42.6621144,21.1668667,17z/data=!3m1!4b1!4m5!3m4!1s0x13549f6bebbb9f29:0xd63b46c92fd7abac!8m2!3d42.6621105!4d21.1690554",
      location: `Parku i Qytetit `,
    },
    {
      dataTarget: 'data-target="p-5"',
      img: [
        "../img/event5-img/events1.jpg",
        "../img/event5-img/events2.jpg",
        "../img/event5-img/events3.jpg",
        "../img/event5-img/events4.jpg",
      ],
      title: "Skiing",
      paragraph: `The alpine skiing competition consists of 11 events: five each for women and men, plus a mixed team parallel combining women and men into one team. The downhill features the longest course and the highest speeds in alpine skiing. Super-G stands for super giant slalom, an event that combines the speed of downhill with the shorter and more technical turns of giant slalom. In these events each skier makes one run down a course, and the fastest time determines the winner.`,
      href: "https://www.google.com/maps/place/Brezovic%C3%AB/@42.2088392,20.9466952,15z/data=!3m1!4b1!4m5!3m4!1s0x13538c227122f021:0x34a1778b730e8c1b!8m2!3d42.2088242!4d20.95545",
      location: `Brezovicë `,
    },
    {
      dataTarget: 'data-target="p-6"',
      img: [
        "../img/event6-img/events1.jpg",
        "../img/event6-img/events2.jpg",
        "../img/event6-img/events3.jpg",
        "../img/event6-img/events4.jpg",
      ],
      title: "Mindfulness   Walk",
      paragraph: ` We bring people together who have passion for walking and meeting new friends. We will take care of the organisation and you can follow your own rhythm.We have chosen for the period of Spring when temperature is nice the Island starts to wake up and nature is ready to flourish. The level of the walking circuits are average so everyone has the chance to walk with us. From 15km to 25km and walking paths vary from sandy to paved routes. The accommodation in the area is perfect to even stay maybe a bit longer on the Kosovo. <br>
      Lets Walk!`,
      href: "https://www.google.com/maps/place/Pishat+e+Sllatin%C3%ABs/@42.6118649,21.0047841,15z/data=!4m9!1m2!2m1!1spark+near+Sllatin%C3%AB!3m5!1s0x1353637471800d25:0x8f1efdb52e084136!8m2!3d42.6141705!4d21.0207057!15sChNwYXJrIG5lYXIgU2xsYXRpbsOrkgEEcGFya-ABAA",
      location: `Pishat e Sllatinës`,
    },
    {
      dataTarget: 'data-target="p-7"',
      img: [
        "../img/event7-img/events1.jpg",
        "../img/event7-img/events2.jpg",
        "../img/event7-img/events3.jpg",
        "../img/event7-img/events4.jpg",
      ],
      title: "Survivial Hike",
      paragraph: "During this event you will learn practical tips and strategies that every outdoor traveler should know. We'll cover the 10 essentials and their practical applications. You'll also learn about emergency priorities, how to make an emergency shelter, how to locate and access drinking water, and how to start a fire. This class is designed for anyone who spends time outside and wants to build their confidence with outdoor skills.",
      href: "https://www.google.com/maps/place/Gjeravica/@42.5318339,20.1060819,14z/data=!4m5!3m4!1s0x13525758b9f25ebb:0x52be42cc69a507c7!8m2!3d42.5318078!4d20.1399003",
      location: `Mali i Gjeravicës`,
    },
    {
      dataTarget: 'data-target="p-8"',
      img: [
        "../img/event8-img/events1.jpg",
        "../img/event8-img/events2.jpg",
        "../img/event8-img/events3.jpg",
        "../img/event8-img/events4.jpg",
      ],
      title: "Prishtina Cycling",
      paragraph: "As ever, the format is designed to be simple, and cheap!! There will be no electronic timing or feed stations, and the routes won't be the gut busting ones you'd expect in the height of summer - but other than that, they'll be everything else you expect from a sportive. With a choice of two well marked routes, mechanical back-up, free energy products for each rider and much more.",
      href: "https://www.google.com/maps/place/Sheshi+%22Sk%C3%ABnderbeu%22,+Prishtin%C3%AB/@42.6637961,21.1615167,17z/data=!4m5!3m4!1s0x13549ee0699e400f:0x747f2bbbcd869d18!8m2!3d42.6637922!4d21.1637054",
      location: `Sheshi "Skënderbeu", Prishtinë`,
    },
    {
      dataTarget: 'data-target="p-9"',
      img: [
        "../img/event9-img/events1.jpg",
        "../img/event9-img/events2.jpg",
        "../img/event9-img/events3.jpg",
        "../img/event9-img/events4.jpg",
      ],
      title: "Auntum Riding",
      paragraph: `The event will be recorded, so if you cannot make it ‘live’ I can email you the recording to watch in your own time meaning you won’t miss out on any of the content. The course has been set up for Area 14 members, but we welcome all members from across the country – last year this included Scotland, Ireland and Wales. To allow maximum engagement of learners group size will be restricted to 14 so don’t delay in booking!`,
      href: "https://www.google.com/maps/place/Vali+Ranch/@42.514314,21.5330346,17z/data=!3m1!4b1!4m5!3m4!1s0x1354edb20aa02ec9:0x3fb9b242f0b04218!8m2!3d42.5147733!4d21.5345333",
      location: `Gjilan `,
    },
    {
      dataTarget: 'data-target="p-10"',
      img: [
        "../img/event10-img/events1.jpg",
        "../img/event10-img/events2.jpg",
        "../img/event10-img/events3.jpg",
        "../img/event10-img/events4.jpg",
      ],
      title: "Kosovo  Skiing",
      paragraph: `The ski resort Bogë is located in Kosovo. For skiing and snowboarding, there are 3 km of slopes available. 1 lift transports the guests. The winter sports area is situated between the elevations of 1,360 and 1,570m . The Skiing events include downhill, slalom, giant slalom, super-G, combined, and mixed team parallel slalom.`,
      href: "google.com/maps/place/Bogë/@42.7428689,20.0338988,14z/data=!3m1!4b1!4m5!3m4!1s0x1352f18cd07ed487:0xbc6ff37129676848!8m2!3d42.7395375!4d20.0538994",
      location: `Bogë, Rugovë `,
    },
  ];

  // imgs it isnt working

  document.write(`<div class="box-preview">`);

  for (let i = 0; i < dataArray.length; i++) {
    document.write(`
  <div class="preview" ${dataArray[i].dataTarget}>
  <i class="fas fa-times" id="exit"></i>
  <div class="imgs">
    <img src="${dataArray[i].img[0]}" alt="" />
    <img src="${dataArray[i].img[1]}" alt="" />
    <img src="${dataArray[i].img[2]}" alt="" />
    <img src="${dataArray[i].img[3]}" alt="" />
  </div>
  <div class="box-preview-information">
    <h2 id="title">${dataArray[i].title}</h2>
    <p id="paragraph">
        ${dataArray[i].paragraph}
    </p>
    <p id="location">
    <a href="${dataArray[i].href}" target="_blank">
      <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
      ${dataArray[i].location}
      </a>
    </p>
  </div>
  </div>
`);
  }

  document.write(`</div">`);
}

popUpData();

let preveiwContainer = document.querySelector(" .box-preview");
let previewBox = preveiwContainer.querySelectorAll(".preview");

document.querySelectorAll(".box").forEach((product) => {
  product.onclick = () => {
    preveiwContainer.style.display = "flex";
    let name = product.getAttribute("data-name");
    previewBox.forEach((preview) => {
      let target = preview.getAttribute("data-target");
      if (name == target) {
        preview.classList.add("active");
      }
    });
  };
});

previewBox.forEach((close) => {
  close.querySelector(".fa-times").onclick = () => {
    close.classList.remove("active");
    preveiwContainer.style.display = "none";
  };
});
