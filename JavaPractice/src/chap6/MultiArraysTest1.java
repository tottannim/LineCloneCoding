package chap6;
import java.util.Random;
public class MultiArraysTest1 {
public static void main(String[] args) {
	Random ran = new Random();
	int[][] score = new int[4][4];
	for(int i=0; i<score.length; i++)
		for (int j=0; j<score.length; j++)
			score[i][j] = ran.nextInt(10);

		for (int k=0; k<=score.length; k++) {
			int sum=0;
			for(int value : score[k]) { // �� �κ� Ȯ���ϰ� �˱�
				System.out.print(value +" ");
				sum += value;
		}
			System.out.println("�� �հ�� " +sum);
		}
}
}