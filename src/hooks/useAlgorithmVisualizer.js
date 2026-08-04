import { useState, useEffect, useRef } from 'react';

export function useAlgorithmVisualizer(frames, speedMs = 1000) {
  const [currentFrameIndex, setCurrentFrameIndex] = useState(0);
  const [isPlaying, setIsPlaying] = useState(false);
  
  const timerRef = useRef(null);

  useEffect(() => {
    if (isPlaying && currentFrameIndex < frames.length - 1) {
      timerRef.current = setTimeout(() => {
        setCurrentFrameIndex(prev => prev + 1);
      }, speedMs);
    } else if (currentFrameIndex >= frames.length - 1) {
      setIsPlaying(false);
    }
    
    return () => clearTimeout(timerRef.current);
  }, [isPlaying, currentFrameIndex, frames, speedMs]);

  const play = () => {
    if (currentFrameIndex >= frames.length - 1) {
      setCurrentFrameIndex(0); // Restart if at end
    }
    setIsPlaying(true);
  };
  
  const pause = () => setIsPlaying(false);
  
  const reset = () => {
    setIsPlaying(false);
    setCurrentFrameIndex(0);
  };

  const nextStep = () => {
    if (currentFrameIndex < frames.length - 1) {
      setCurrentFrameIndex(prev => prev + 1);
    }
  };

  const prevStep = () => {
    if (currentFrameIndex > 0) {
      setCurrentFrameIndex(prev => prev - 1);
    }
  };

  return {
    currentFrame: frames[currentFrameIndex] || null,
    isPlaying,
    play,
    pause,
    reset,
    nextStep,
    prevStep,
    isFinished: currentFrameIndex >= frames.length - 1,
    progress: frames.length > 0 ? (currentFrameIndex / (frames.length - 1)) * 100 : 0
  };
}
