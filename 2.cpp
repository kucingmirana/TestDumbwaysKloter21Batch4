// Example program
#include <iostream>
#include <string>

using namespace std;

void vendingmesin(int a, int b, int c,int d){
    int k=0,f=0,p=0;
    int total;
    int sisa;
    cout<<"=================================="<<endl;
   if (a!=0){
       cout<<"Coca-cola = Rp.4000 *"<<a<<endl;
       k= 4000*a;
   }
   if (b!=0){
       cout<<"fanta = Rp.3500 *"<<b<<endl;
       f= 3500*b;
   }
   if (c!=0){
       cout<<"Pepsi = Rp.4500 *"<<c<<endl;
       p= 4500*c;
   }
   
   cout<<"Jumlah = "<<a+b+c<<endl;
   cout<<"Total = Rp. "<<k+f+p<<endl;
   cout<<"Dibayar = Rp. "<<d<<endl;
   total = d-(k+f+p);
   
   cout<<"Kembalian:"<<endl;
   
   if(total-20000 >= 0){
       total=total-20000;
       cout<<"1 lembar uang Rp 20.000 (dua puluh ribu rupiah)"<<endl;
       if(total-10000 >= 0){
           total=total-10000;
           cout<<"1 lembar uang Rp 10.000 (sepuluh ribu rupiah)"<<endl;
           if(total-5000 >= 0){
               total=total-5000;
               cout<<"1 lembar uang Rp 5.000 ( lima ribu rupiah)"<<endl;
               if(total-2000 >= 0){
                   total=total-2000;
                   cout<<"1 lembar uang Rp 2.000 ( dua ribu rupiah)"<<endl;
                   if(total-500 >= 0){
                       total=total-500;
                       cout<<"1 lembar uang Rp 500 ( lima ratus rupiah)"<<endl;
                   }
               }
           }
       }
   }
   
}

int main()
{
    int a=2,b=0,c=1,d=50000;
    cout<<"aplikasi vending machine"<<endl;
    cout<<"Coca-cola = 4.000"<<endl;
    cout<<"Fanta = 3.500"<<endl;
    cout<<"Pepsi = 4.500"<<endl;
    cout<<"====================="<<endl;
    vendingmesin(a,b,c,d);
}

