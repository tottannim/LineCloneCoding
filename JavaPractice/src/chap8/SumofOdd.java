package chap8;
import java.util.Scanner;

public class SumofOdd {
public static void main(String args[]) {
	int n,m;
	Scanner stdin = new Scanner(System.in);
	System.out.print("���� �� ���� �Է���2�ÿ�(������ ���� ��) : ");
	n = stdin.nextInt();
	m = stdin.nextInt();
	Sum s = new Sum();
	System.out.println(n+" ���� "+m+" ������ ���� "+s.oddsum(n, m));
}
}
