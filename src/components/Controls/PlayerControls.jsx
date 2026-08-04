import React from 'react';
import { Play, Pause, RotateCcw, SkipBack, SkipForward } from 'lucide-react';

export function PlayerControls({ isPlaying, onPlay, onPause, onReset, onNext, onPrev, progress }) {
  return (
    <div className="player-controls">
      <div className="progress-bar-bg">
        <div className="progress-bar-fill" style={{ width: `${progress}%` }}></div>
      </div>
      <div className="buttons-row">
        <button className="icon-btn" onClick={onReset} title="Reset">
          <RotateCcw size={18} />
        </button>
        <button className="icon-btn" onClick={onPrev} title="Previous Step">
          <SkipBack size={18} />
        </button>
        
        {isPlaying ? (
          <button className="icon-btn main-btn" onClick={onPause} title="Pause">
            <Pause size={24} />
          </button>
        ) : (
          <button className="icon-btn main-btn" onClick={onPlay} title="Play">
            <Play size={24} fill="currentColor" />
          </button>
        )}
        
        <button className="icon-btn" onClick={onNext} title="Next Step">
          <SkipForward size={18} />
        </button>
      </div>
    </div>
  );
}
