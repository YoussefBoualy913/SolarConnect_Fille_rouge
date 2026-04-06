function  nextStep(curant,next){
    
    curant.style.display = "none";
    next.style.display = "block";

}

function prevStep(prev,curant){
    prev.style.display = "block";
    curant.style.display = "none";
}

function changeCard(){
    const container = document.querySelector('.cards-container');

container.addEventListener('click', (e) => {
  const card = e.target.closest('.card');
  if (!card) return;

  container.querySelector('.border-primary')?.classList.remove('border-primary');
  container.querySelectorAll('.check_circle')?.forEach(elm =>{
      elm.classList.remove('opacity-100');
  });

  card.classList.add('border-primary');
  card.querySelector('.check_circle').classList.add('opacity-100');

  const step1_btn_next = document.querySelector('.step1_btn_next');
  step1_btn_next.dataset.type = card.dataset.type;
  
});
    
}

changeCard();


const step1_btn_next = document.querySelector('.step1_btn_next');
step1_btn_next.addEventListener('click',() => {
    
    if(step1_btn_next.dataset.type === "client"){
        
        const step1 = document.querySelector('.step1');
        const step2 = document.querySelector('.step2_client');
        
        nextStep(step1,step2);
    }
    
    else if(step1_btn_next.dataset.type === "prestataire"){
        
        const step1 = document.querySelector('.step1');
        const step2 = document.querySelector('.step2_prestataire');
        
        nextStep(step1,step2);
    }else{
      
        
        alert('Veuillez sélectionner votre type');
        return;
    }
    
});


const client_btn_prev = document.querySelector('.client_btn_prev');
client_btn_prev.addEventListener('click',() => {
    
        const step1 = document.querySelector('.step1');
        const step2 = document.querySelector('.step2_client');
  prevStep(step1,step2);
});

const prestataire_step2_btn_prev = document.querySelector('.prestataire_step2_btn_prev');
prestataire_step2_btn_prev.addEventListener('click',() => {
    
        const step1 = document.querySelector('.step1');
        const step2 = document.querySelector('.step2_prestataire');
  prevStep(step1,step2);
});



const prestataire_step2_btn_next = document.querySelector('.prestataire_step2_btn_next');
prestataire_step2_btn_next.addEventListener('click',() => {
        const step2_prestataire = document.querySelector('.step2_prestataire');
        const step1 = step2_prestataire.querySelector('.step2');
        const step2 = step2_prestataire.querySelector('.step3');

        step2_prestataire.querySelector('.step_number').textContent ="Étape 3/3";
        step2_prestataire.querySelector('.step_title').textContent ="Détails de votre entreprise";

  nextStep(step1,step2);

});

const prestataire_step3_btn_prev = document.querySelector('.prestataire_step3_btn_prev');
prestataire_step3_btn_prev.addEventListener('click',() => {
        const step2_prestataire = document.querySelector('.step2_prestataire');
        const step1 = step2_prestataire.querySelector('.step2');
        const step2 = step2_prestataire.querySelector('.step3');
  prevStep(step1,step2);
});