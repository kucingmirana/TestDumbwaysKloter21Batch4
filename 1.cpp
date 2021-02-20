// Example program
#include <iostream>
#include <string>

using namespace std;

void prima(int a, int b){
    int c;
    cout<<"bilangan prima antara "<<a<<" dan "<<b<<endl;
    for(a;a<=b;a++)
    {
        c=0;
        for(int j=1;j<=a;j++){
			if(a%j==0){
				c=c+1;
			}
		}
		if(c==2){
		    cout<<a<<" ";
		}
    }
}

int main()
{
    int a=20,b=50;
    cout<<"aplikasi penentu bilangan prima"<<endl;
    prima(a,b);
}

