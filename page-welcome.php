<?php
/*
Template Name: Welcome
*/
?>

<style>
    body, html {
margin: 0; padding: 0; 
height: 100%; 
background: #d7e845;
overflow-x: hidden;
}
.welcome-bg {
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
}
.welcome-title {
font-size: 7vw;
font-weight: bold;
font-family: 'Montserrat', Impact, sans-serif;
display: flex;
}
.welcome-title span {
  opacity: 0;
  transition: opacity 0.5s ease;
  margin: 0 0.15em;
}
.welcome-title span.visible {
  opacity: 1;
}
.welcome-cta {
margin-top: 2rem;
padding: 1rem 2.5rem;
border-radius: 2rem;
background: #fff;
color: #1a1a1a;
font-weight: 700;
font-size: 1.2rem;
text-decoration: none;
box-shadow: 0 4px 12px rgba(0,0,0,0.03);
border: none;
transition: background 0.2s;
}
.welcome-cta:hover {
background: #eee;
}
</style>

<div class="welcome-bg">
  <h1 class="welcome-title">
    <span>A</span><span>D</span><span>E</span><span>V</span><span>I</span><span>A</span>
  </h1>
  <a href="<?php echo esc_url(home_url('/')); ?>" class="welcome-cta">CONÓCENOS →</a>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const letters = document.querySelectorAll('.welcome-title span');
  let lastScrollTop = 0;
  window.addEventListener('scroll', () => {
    const st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > lastScrollTop) {
      for(let i = 0; i < letters.length; i++) {
        setTimeout(() => {
          letters[i].classList.add('visible');
        }, i * 200);
      }
    } else {
      for(let i = 0; i < letters.length; i++) {
        letters[i].classList.remove('visible');
      }
    }
    lastScrollTop = st <= 0 ? 0 : st;
  }, false);
});
</script>

<?php

?>