package chap5;
import java.util.Scanner;

public class guusuu {
public static void main(String[] args) {
	Scanner stdin = new Scanner(System.in);
	System.out.print("���ڸ� �Է��ϼ���: ");
	int num1 = stdin.nextInt();
	int i, sum=0;
	
	for(i=1;i<=num1;i++) {
		if(i%2==1) continue;
		sum += i;
	}
	System.out.print(num1+"���� ¦���� �� = "+sum);
}
}
