const form = document.querySelector('.page form')
const nextButton = document.querySelectorAll('.nextButton')
const backButton = document.querySelectorAll('.backButton')

const isEmail = (email) => {
	const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

const isNumber = (num) => {
	const input = /^[a-zA-Z]+$/;
	if(num.match(input))true
	else false
}

const isPhoneNumber = (value) => {

    const input = value.replace(/\D/g,'')
	
	if(input.length === 10)return true
	else return false
};
function phoneFormat(input){
        // Strip all characters from the input except digits
        input = input.replace(/\D/g,'');
        
        // Trim the remaining input to ten characters, to preserve phone number format
        input = input.substring(0,10);

        // Based upon the length of the string, we add formatting as necessary
        var size = input.length;
        if(size == 0){
                input = input;
        }else if(size < 4){
                input = '('+input;
        }else if(size < 7){
                input = '('+input.substring(0,3)+') '+input.substring(3,6);
        }else{
                input = '('+input.substring(0,3)+') '+input.substring(3,6)+' - '+input.substring(6,10);
        }
        return input; 
}

nextButton.forEach((button,b)=>{
	const inputs = document.querySelectorAll('.s'+(b)+' .required')
	let disabled = [true]
	button.disabled = true
	inputs.forEach((input,i)=>{
		disabled[i] = true
		if(input.classList.contains('radio')){
			const checks = input.querySelectorAll('.s'+(b)+' .required input')
			checks.forEach((check)=>{
				check.addEventListener('click',(e)=>{
					disabled[i] = true
					if(e.target.value != null){
						disabled[i] = false
					}
					let newDisabled = true
					disabled.forEach((d,i)=>{
						newDisabled = !d && !disabled[i-1] ? false : true
					})
					button.disabled = newDisabled
				})
			})
		}else{
			
			const text = input.querySelector('.s'+(b)+' .required input')
			const error = document.createElement('span')
			error.classList.add('error')
			if(text.type === 'email' || text.type === 'tel'){
				input.appendChild(error)
			}
			text.addEventListener('change',(e)=>{
				disabled[i]=true
				if(text.type === 'email'){
					if(isEmail(e.target.value)){
						disabled[i]=false
						error.innerHTML = ""
					}else{
						error.innerHTML = "invalid email"
					}
				}else if(text.type === 'tel'){
					text.value = phoneFormat(e.target.value)
					if(isPhoneNumber(e.target.value)){
						disabled[i]=false
						error.innerHTML = ""
					}else{
						error.innerHTML = "invalid phone number"
					}
				}else if(e.target.value != '' && e.target.value != null){
					disabled[i]=false
				}
				
				let newDisabled = true
				disabled.forEach((d,i)=>{
					if(i>0){
						newDisabled = d===false && disabled[i-1]===false ? false : true
					}else{
						newDisabled = d
					}
				})
				button.disabled = newDisabled
			})
		}
	})
	button.addEventListener('click',(e)=>{
		e.preventDefault()
		form.id = 's'+(b+1)
		const section = document.querySelector('.s'+(b+1))
		form.style.height = section.offsetHeight+"px"
	})
})



backButton.forEach((button,b)=>{
	button.addEventListener('click',(e)=>{
		if(b<backButton.length-1){
			e.preventDefault()
			form.id = 's'+(b)
			const section = document.querySelector('.s'+(b))
			form.style.height = section.offsetHeight+"px"
		}
	})
})