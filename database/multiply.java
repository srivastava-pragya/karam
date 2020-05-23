import java.util.Scanner;
class digonalssum
{
	public static void main(String args[])
	{
		Scanner in=new Scanner(System.in);
		System.out.println("Enter size of square matrix");
		int n=in.nextInt();
		int a[][]=new int[n][n];
		for(int i=0;i<n;i++)
			for(int j=0;j<n;j++)
				a[i][j]=in.nextInt();
			for(int i=0;i<n;i++)
			{
				for(int j=0;j<n;j++)
				{
					System.out.println(a[i][j]+"\t");
				}
				System.out.println();
			}
	}
	System.out.println("\n Square Matrix");
	for(int i=0;i<n;i++)
	{
		for(int j=0;j<n;j++)
		{
			System.out.println(a[i][j]+"\t");
		}
		System.out.println()'
	}
}
int sumL=0,sumR=0;
for(int i=0;i<n;i++)
{
	for(int j=0;j<n;j++)
	{
		if(i==j)
			sumL+=a[i][j];
		if(i+j==n-1)
			sumR+=a[i][j];
	}
}
System.out.println("");
System.out.println("sum of left diagonal="+sumL);
System.out.println("sum of right diagonal="+sumR);
}