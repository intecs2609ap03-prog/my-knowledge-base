package myapp;

import java.awt.GridLayout;
import java.awt.event.ActionListener;

import javax.swing.JButton;
import javax.swing.JFrame;

public class Main {

	public static void main(String[] args) {
		var jframe = new JFrame("ウィンドウ1");
		jframe.setSize(500, 500);
		
		var jButton1 = new JButton("ボタン1");
		var jButton2 = new JButton("ボタン2");
		var layout = new GridLayout(2,3);
		
		var event1 = (ActionListener)((e) -> {
			System.out.println("イベント1");
		});
		
		var event2 = (ActionListener)((e) -> {
			System.out.println("イベント2");
		});
		
		jButton1.addActionListener(event1);
		jButton2.addActionListener(event2);
		
		jframe.add(jButton1);
		jframe.add(jButton2);
		jframe.setLayout(layout);
		
		jframe.setVisible(true);
	}
}