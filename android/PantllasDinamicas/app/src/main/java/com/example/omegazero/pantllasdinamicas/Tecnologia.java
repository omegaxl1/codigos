package com.example.omegazero.pantllasdinamicas;

import android.app.Fragment;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

/**
 * Created by Omega Zero on 25/09/2016.
 */
public class Tecnologia extends Fragment {


    public Tecnologia() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        return inflater.inflate(R.layout.fragment_tecnologia, container, false);
    }

    @Override
    public void onResume() {
        super.onResume();
        getActivity().setTitle("Tecnología");
    }
}