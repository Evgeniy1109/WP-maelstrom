

// Памятка

const memo = document.querySelectorAll('.tab_memo');
const cont = document.querySelectorAll('.tab_memo_content');

for (let i=0; i<memo.length; i++){
    memo[i].addEventListener('click', function(e) {
        e.preventDefault();

        let activeTab = e.target.getAttribute('data-memo');
        for (let j=0; j<memo.length; j++){
            let content = cont[j].getAttribute('data-memo-content');

            if (activeTab === content){
                memo[j].classList.add('active');
                cont[j].classList.add('active');
            }else{
                memo[j].classList.remove('active');
                cont[j].classList.remove('active');
            }
        }
    })
}
// --------------------