package chap8;
import java.util.Scanner;

public class SumofEven {
public static void main(String args[]) {	
	Scanner stdin = new Scanner(System.in);
	System.out.print("�� ���� �Է��ϼ���: ");
	int n = stdin.nextInt();
	int m = stdin.nextInt();
	Sum s = new Sum();
	
	System.out.print(n+" ���� "+m+" ������ ¦�� ���� : "+s.evensum(n, m));
}
}
