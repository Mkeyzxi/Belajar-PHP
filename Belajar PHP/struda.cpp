#include <iostream>
using namespace std;

struct dataMhs{
	char nim[15];
	char nama[30];
	char alamat[50];
	int nilai[50];
};
int main(){
	int jumlah;
	int rataRata;
	struct dataMhs *ptrMhs, nilaiMhs;
	cout << "masukkan jumlah mahasiswa : ";
	cin >> jumlah;
	
	ptrMhs = new dataMhs[jumlah];
	
	for(int j = 0; j < jumlah; j++){
		cout << "masukkan data ke " << j+1 << " : " << endl;
		cout << "input nim : ";
		cin >> ptrMhs[j].nim;
		cout << "input nama : ";
		cin >> ptrMhs[j].nama;
		cout << "input alamat : ";
		cin >> ptrMhs[j].alamat;
		cout << "input nilai : ";
		cin >> nilaiMhs.nilai[j];
		cout << endl;
	}
	for(int k = 0; k < jumlah; k++){
		rataRata = nilaiMhs.nilai[k] + nilaiMhs.nilai[k+1];
	}
	rataRata /= jumlah;
	for(int j = 0; j < jumlah; j++){
		cout << endl;
		cout << "daftar mahasiswa : \n";
		
		cout << j+1 << "nim : " << ptrMhs[j].nim << endl;
		cout << "nama : " << ptrMhs[j].nim << endl;
		cout << "alamat : " << ptrMhs[j].nim << endl;
		cout << "rata-rata : " << nilaiMhs.nilai[j] << endl;
	}
	delete [] ptrMhs;
	
	
	
	return 0;
	
}