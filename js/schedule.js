const region = document.querySelectorAll(".btn");
const card = document.querySelectorAll(".product_card");

for (let i = 0; i < region.length; i++) {
  region[i].addEventListener("click", function (e) {
    e.preventDefault();
    let activeTabs = e.target.getAttribute("data-tab-region");
    for (let j = 0; j < region.length; j++) {
      let contents = card[j].getAttribute("data-tab-region-content");

      if (activeTabs === contents) {
        region[j].classList.add("active");
        card[j].classList.add("active");
      } else {
        region[j].classList.remove("active");
        card[j].classList.remove("active");
      }
    }
  });
}

const tabA = document.querySelectorAll(".сrimea_desc_list");
const crimea = document.querySelectorAll(".crimea_product_card_tours");

for (let i = 0; i < tabA.length; i++) {
  tabA[i].addEventListener("click", function (e) {
    e.preventDefault();
    let activeTab = e.target.getAttribute("data-tab");
    for (let j = 0; j < tabA.length; j++) {
      let content = crimea[j].getAttribute("data-tab-content");

      if (activeTab === content) {
        tabA[j].classList.add("active");
        crimea[j].classList.add("active");
      } else {
        tabA[j].classList.remove("active");
        crimea[j].classList.remove("active");
      }
    }
  });
}

// function schedule_modal_open_open() {
//   document
//     .querySelector(".schedule_modal_close")
//     .classList.toggle("schedule_modal_open");
// }
function schedule_modal_close() {
  document
    .querySelector(".schedule_modal_close")
    .classList.toggle("schedule_modal_open");
}



let schedule_modal = document.querySelectorAll("#schedule_modal");
let btn = document.querySelectorAll("#btn");

let scheduleModalArr = [];
let btnArr = [];


for (let j = 0; j < schedule_modal.length; j++) {
  scheduleModalArr.push([j]);
}
for (let y = 0; y < btn.length; y++) {
  btnArr.push([y]);
}

console.log(scheduleModalArr);
console.log(btnArr);


if (btnArr[y] === scheduleModalArr[j]) {
  document.querySelectorAll("#btn").addEventListener('click', function () {
      document.querySelectorAll(".schedule_modal_close").classList.toggle("schedule_modal_open");
    });
}
