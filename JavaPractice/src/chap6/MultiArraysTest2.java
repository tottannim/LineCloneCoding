package chap6;

public class MultiArraysTest2 {
public static void main(String[] args) {
	int twoD[][] = new int[4][];
	int i,j,k=0;
	
	System.out.println("2���� �迭���� ���� ���̴� : "+twoD.length);
	
	for(i=0; i<twoD.length; i++) {
		twoD[i] = new int[i+1];
		System.out.println((i+1)+"��° ���� ��� ���� : "+twoD[i].length);
	}
	
	for(i=0; i<twoD.length; i++) {
		for(j=0; j<twoD[i].length; j++) {
			twoD[i][j] = k;
			k++;
		}
	}
	
	for(i=0; i<twoD.length; i++) {
		for(int value : twoD[i]) {
			System.out.print(value+ " ");
		}
		System.out.println();
	}
}
}
