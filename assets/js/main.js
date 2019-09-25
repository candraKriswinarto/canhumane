const menuBtn = document.querySelector('.menu-btn');
const hamburger = document.querySelector('.menu-btn__burger');
const nav = document.querySelector('nav');

menuBtn.addEventListener('click', () => {
  hamburger.classList.toggle('open');
  nav.classList.toggle('open');
});


fetch('https://jsonplaceholder.typicode.com/posts')
.then((res) => res.json())
.then((data) => {
  let output = '';
  data.forEach((post) => {
    output += `
    <div class="post">
      <h5 class="post-title">${post.title}</h5>
      <p>${post.body}</p>
      <a href="#" class="post-btn">Read More</a>
    </div>
    `;
    console.log(post.id);
  });
  document.getElementById('output').innerHTML = output;
});