// Example program
#include <iostream>
#include <string>

using namespace std;

int main()
{
    int a=16, b=a/4;
    int total=1;
    
    for (int i=1;i<=b;i++){
        cout<<endl;
        for (int j=1;j<=b;j++){
            if(i==1){
                cout<<" ";
                if(j==1){
                    cout<<total;
                }
                else{
                    total=total+j-1;
                    cout<<total;
                }
                
            }
            if(i==2){
                cout<<" ";
                if(j==1){
                    total=total-4;
                    cout<<total;
                }
                else{
                    if(j==2){
                        total=total+j;
                        cout<<total;
                    }
                    else{
                        total=total+3;
                        cout<<total;
                    }
                    
                }
            }
            
            if(i==3){
                cout<<" ";
                if(j==1){
                    total=total-5;
                    cout<<total;
                }
                else{
                    if(j==4){
                        total=total+j-2;
                        cout<<total;
                    }
                    else{
                        total=total+3;
                        cout<<total;
                    }
                    
                }
            }
            
            if(i==4){
                cout<<" ";
                if(j==1){
                    total=total-4;
                    cout<<total;
                }
                else{
                    total=total+i-j+1;
                    cout<<total;
                }
                
            }
            
        }
    }
    
}

