import java.util.Scanner;

public class first
{
    public static void main(String[] args)
    {
        /*
        Scanner scan = new Scanner(System.in);
        System.out.println("Enter value ");
        int num = scan.nextInt();
        System.out.println("num = " + num);
         */

        int arr[] = {10, 1, 9, 2, 8, 3, 7, 4, 6, 5};
        int pass, n = 10, i;

        for(pass = 0; pass < 10; pass++)
        {
            for(i = 0; i < n-pass-1; i++)
            {
                if(arr[i]>arr[i+1])
                {
                    int temp = arr[i];
                    arr[i] = arr[i+1];
                    arr[i+1] = temp;
                }
            }
        }

        for(int element : arr)
        {
            System.out.println("\n" + element);
        }
    }
}
