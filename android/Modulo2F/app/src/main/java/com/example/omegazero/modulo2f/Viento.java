package com.example.omegazero.modulo2f;

import android.app.Fragment;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

/**
 * Created by Omega Zero on 25/09/2016.
 */
public class Viento extends Fragment {

    public Viento() {
        // constructor
    }
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // vista del framet
        return inflater.inflate(R.layout.fragment_viento, container, false);
    }
// titulo
    @Override
    public void onResume() {
        super.onResume();
        getActivity().setTitle("Viento");
    }
}