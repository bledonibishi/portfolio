const slider = function () {
  const slides = document.querySelectorAll(".slide");
  const btnRight = document.querySelector(".slider__btn--right");
  const btnLeft = document.querySelector(".slider__btn--left");

  // const slider = document.querySelector(".slider");
  // slider.style.transform = "scale(0.4) transformX(-800px)";
  // slider.style.overflow = "visible";

  let curSlide = 0;
  const lengthSlide = slides.length;

  const gotoSlide = function (slide) {
    slides.forEach(
      (s, i) => (s.style.transform = `translateX(${100 * (i - slide)}%)`)
    );
  };
  gotoSlide(0);

  const nextSlide = function () {
    if (curSlide === lengthSlide - 1) {
      curSlide = 0;
      console.log(curSlide);
    } else {
      curSlide++;
    }

    gotoSlide(curSlide);
  };
  const prevSlide = function () {
    if (curSlide === 0) {
      curSlide = lengthSlide - 1;
      console.log(curSlide);
    } else {
      curSlide--;
    }
    gotoSlide(curSlide);
  };

  btnRight.addEventListener("click", nextSlide);
  btnLeft.addEventListener("click", prevSlide);
};

slider();
