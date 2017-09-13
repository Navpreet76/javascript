//Check if Number is Prime

function isPrime(n){
	var divisor = 2;
	while( n > divisor){
		if(n % divisor == 0){
			return false;
		}
		else
			divisor++;
	}
	return true;
}

//Find all the Prime factors of a number

function primeFactors(n){
	var factors = [],
		divisor = 2;

	while(n > 2){
		if(n % divisor == 0){
			factors.push(divisor);
			n = n / divisor;
		}
		else{
			divisor++;
		}
	}
	return factors;
}