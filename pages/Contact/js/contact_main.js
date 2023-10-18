AOS.init({
  once: !0,
  disable: "phone",
  duration: 1e3,
  easing: "ease-out-cubic",
});
const clientsEl = document.querySelectorAll(".clients-carousel");
if (clientsEl.length > 0) {
  new Swiper(".clients-carousel", {
    slidesPerView: "auto",
    spaceBetween: 64,
    centeredSlides: !0,
    loop: !0,
    speed: 5e3,
    noSwiping: !0,
    noSwipingClass: "swiper-slide",
    autoplay: { delay: 0, disableOnInteraction: !0 },
  });
}
const carouselEl = document.querySelectorAll(".testimonials-carousel");
if (carouselEl.length > 0) {
  new Swiper(".testimonials-carousel", {
    breakpoints: {
      320: { slidesPerView: 1 },
      640: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    },
    grabCursor: !0,
    loop: !1,
    centeredSlides: !1,
    initialSlide: 0,
    spaceBetween: 24,
    navigation: { nextEl: ".carousel-next", prevEl: ".carousel-prev" },
  });
}
class ParticleAnimation {
  constructor(t, { quantity: i = 30, staticity: e = 50, ease: s = 50 } = {}) {
    (this.canvas = t),
      this.canvas &&
        ((this.canvasContainer = this.canvas.parentElement),
        (this.context = this.canvas.getContext("2d")),
        (this.dpr = window.devicePixelRatio || 1),
        (this.settings = { quantity: i, staticity: e, ease: s }),
        (this.circles = []),
        (this.mouse = { x: 0, y: 0 }),
        (this.canvasSize = { w: 0, h: 0 }),
        (this.onMouseMove = this.onMouseMove.bind(this)),
        (this.initCanvas = this.initCanvas.bind(this)),
        (this.resizeCanvas = this.resizeCanvas.bind(this)),
        (this.drawCircle = this.drawCircle.bind(this)),
        (this.drawParticles = this.drawParticles.bind(this)),
        (this.remapValue = this.remapValue.bind(this)),
        (this.animate = this.animate.bind(this)),
        this.init());
  }
  init() {
    this.initCanvas(),
      this.animate(),
      window.addEventListener("resize", this.initCanvas),
      window.addEventListener("mousemove", this.onMouseMove);
  }
  initCanvas() {
    this.resizeCanvas(), this.drawParticles();
  }
  onMouseMove(t) {
    const { clientX: i, clientY: e } = t,
      s = this.canvas.getBoundingClientRect(),
      { w: a, h: n } = this.canvasSize,
      h = i - s.left - a / 2,
      r = e - s.top - n / 2;
    h < a / 2 &&
      h > -a / 2 &&
      r < n / 2 &&
      r > -n / 2 &&
      ((this.mouse.x = h), (this.mouse.y = r));
  }
  resizeCanvas() {
    (this.circles.length = 0),
      (this.canvasSize.w = this.canvasContainer.offsetWidth),
      (this.canvasSize.h = this.canvasContainer.offsetHeight),
      (this.canvas.width = this.canvasSize.w * this.dpr),
      (this.canvas.height = this.canvasSize.h * this.dpr),
      (this.canvas.style.width = this.canvasSize.w + "px"),
      (this.canvas.style.height = this.canvasSize.h + "px"),
      this.context.scale(this.dpr, this.dpr);
  }
  circleParams() {
    return {
      x: Math.floor(Math.random() * this.canvasSize.w),
      y: Math.floor(Math.random() * this.canvasSize.h),
      translateX: 0,
      translateY: 0,
      size: Math.floor(2 * Math.random()) + 1,
      alpha: 0,
      targetAlpha: parseFloat((0.6 * Math.random() + 0.1).toFixed(1)),
      dx: 0.2 * (Math.random() - 0.5),
      dy: 0.2 * (Math.random() - 0.5),
      magnetism: 0.1 + 4 * Math.random(),
    };
  }
  drawCircle(t, i = !1) {
    const { x: e, y: s, translateX: a, translateY: n, size: h, alpha: r } = t;
    this.context.translate(a, n),
      this.context.beginPath(),
      this.context.arc(e, s, h, 0, 2 * Math.PI),
      (this.context.fillStyle = `rgba(255, 255, 255, ${r})`),
      this.context.fill(),
      this.context.setTransform(this.dpr, 0, 0, this.dpr, 0, 0),
      i || this.circles.push(t);
  }
  clearContext() {
    this.context.clearRect(0, 0, this.canvasSize.w, this.canvasSize.h);
  }
  drawParticles() {
    this.clearContext();
    const t = this.settings.quantity;
    for (let i = 0; i < t; i++) {
      const t = this.circleParams();
      this.drawCircle(t);
    }
  }
  remapValue(t, i, e, s, a) {
    const n = ((t - i) * (a - s)) / (e - i) + s;
    return n > 0 ? n : 0;
  }
  animate() {
    this.clearContext(),
      this.circles.forEach((t, i) => {
        const e = [
            t.x + t.translateX - t.size,
            this.canvasSize.w - t.x - t.translateX - t.size,
            t.y + t.translateY - t.size,
            this.canvasSize.h - t.y - t.translateY - t.size,
          ].reduce((t, i) => Math.min(t, i)),
          s = this.remapValue(e, 0, 20, 0, 1).toFixed(2);
        if (
          (s > 1
            ? ((t.alpha += 0.02),
              t.alpha > t.targetAlpha && (t.alpha = t.targetAlpha))
            : (t.alpha = t.targetAlpha * s),
          (t.x += t.dx),
          (t.y += t.dy),
          (t.translateX +=
            (this.mouse.x / (this.settings.staticity / t.magnetism) -
              t.translateX) /
            this.settings.ease),
          (t.translateY +=
            (this.mouse.y / (this.settings.staticity / t.magnetism) -
              t.translateY) /
            this.settings.ease),
          t.x < -t.size ||
            t.x > this.canvasSize.w + t.size ||
            t.y < -t.size ||
            t.y > this.canvasSize.h + t.size)
        ) {
          this.circles.splice(i, 1);
          const t = this.circleParams();
          this.drawCircle(t);
        } else
          this.drawCircle(
            {
              ...t,
              x: t.x,
              y: t.y,
              translateX: t.translateX,
              translateY: t.translateY,
              alpha: t.alpha,
            },
            !0
          );
      }),
      window.requestAnimationFrame(this.animate);
  }
}
const canvasElements = document.querySelectorAll("[data-particle-animation]");
canvasElements.forEach((t) => {
  const i = {
    quantity: t.dataset.particleQuantity,
    staticity: t.dataset.particleStaticity,
    ease: t.dataset.particleEase,
  };
  new ParticleAnimation(t, i);
});
class Highlighter {
  constructor(t) {
    (this.container = t),
      (this.boxes = Array.from(this.container.children)),
      (this.mouse = { x: 0, y: 0 }),
      (this.containerSize = { w: 0, h: 0 }),
      (this.initContainer = this.initContainer.bind(this)),
      (this.onMouseMove = this.onMouseMove.bind(this)),
      this.init();
  }
  initContainer() {
    (this.containerSize.w = this.container.offsetWidth),
      (this.containerSize.h = this.container.offsetHeight);
  }
  onMouseMove(t) {
    const { clientX: i, clientY: e } = t,
      s = this.container.getBoundingClientRect(),
      { w: a, h: n } = this.containerSize,
      h = i - s.left,
      r = e - s.top;
    h < a &&
      h > 0 &&
      r < n &&
      r > 0 &&
      ((this.mouse.x = h),
      (this.mouse.y = r),
      this.boxes.forEach((t) => {
        const i = -(t.getBoundingClientRect().left - s.left) + this.mouse.x,
          e = -(t.getBoundingClientRect().top - s.top) + this.mouse.y;
        t.style.setProperty("--mouse-x", `${i}px`),
          t.style.setProperty("--mouse-y", `${e}px`);
      }));
  }
  init() {
    this.initContainer(),
      window.addEventListener("resize", this.initContainer),
      window.addEventListener("mousemove", this.onMouseMove);
  }
}
const highlighters = document.querySelectorAll("[data-highlighter]");
highlighters.forEach((t) => {
  new Highlighter(t);
});