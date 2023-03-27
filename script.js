
const make_deposit_btn = document.querySelector('#make-deposit')
const make_deposit_modal = document.querySelector('#deposit-modal')

make_deposit_btn.addEventListener('click', (e)=>{
    make_deposit_modal.style.display = 'flex';
})