
var modal = document.querySelector('.modal')
var modal2 = document.querySelector('.modal2')
var modalBtn = document.getElementById('modalBtn')
var closeBtn = document.querySelector('.closeBtn')
var closeBtn2 = document.querySelector('.closeBtn2')
var modalLogin = document.getElementById('modalLogin')

modalBtn.addEventListener('click', () => {
   modal.style.display = 'block'
})

closeBtn.addEventListener('click', () => {
   modal.style.display = 'none'
})

window.addEventListener('click', (e) => {
   if (e.target === modal) {
   modal.style.display = 'none'

   }
})

// For Log in

modalLogin.addEventListener('click', () => {
   modal2.style.display = 'block'
})

closeBtn2.addEventListener('click', () => {
   modal2.style.display = 'none'
})

window.addEventListener('click', (e) => {
   if (e.target === modal2) {
   modal2.style.display = 'none'

   }
})
