
import java.util.Scanner;

public class array
{
public static void main(String[] args){
Scanner sc=new Scanner(System.in);

int [][] a=new int[2][3] ;
int [][] b=new int[3][2] ;
int [][] c=new int[3][2] ;

System.out.println("enter the elements");
for(int i=0;i<2;i++){
    for(int j=0;j<3;j++)
{
    a[i][j]=sc.nextInt();
}}
System.out.println("enter the elements");
for(int i=0;i<3;i++){
    for(int j=0;j<2;j++)
{
    b[i][j]=sc.nextInt();
}};
System.out.println("array c is");
for(int i=0;i<2;i++){

    for(int j=0;j<2;j++)
{ int sum=0;
     for(int k=0;k<3;k++){
    sum=sum+(a[i][k]*b[k][j]);
    c[i][j]=sum;
}}}
for(int i=0;i<2;i++){
    for(int j=0;j<2;j++)
{
   System.out.print(c[i][j] +" ");
}
System.out.println();

}
}}