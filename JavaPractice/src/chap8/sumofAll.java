package chap8;
import java.util.Scanner;

public class sumofAll {
public static void main(String args[]) {
	Scanner stdin = new Scanner(System.in);
	Sum s = new Sum();
	System.out.println("�� ���� ���� �Է�(������ ���� ��)");
	int n = stdin.nextInt();
	int m = stdin.nextInt();
	System.out.println(n+" ���� "+m+" ������ �� " + +s.allsum(n, m));
}
}
